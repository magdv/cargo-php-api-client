<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Authentication;

use Cargomart\ApiClient\Authentication\exceptions\SessionStorageException;
use Cargomart\ApiClient\Authentication\exceptions\TokenInvalidException;
use Cargomart\ApiClient\Client;

class StorageWrapperAuthentication implements AuthenticationInterface
{
    /**
     * @var SessionStorageInterface|null
     */
    private $sessionStorage;

    /**
     * @var null|string
     */
    private $sessionKey;

    /**
     * @var AuthenticationInterface
     */
    private $auth;

    /**
     * @param AuthenticationInterface        $auth
     * @param SessionStorageInterface        $storage
     * @param SessionKeyGetterInterface|null $keyGetter
     */
    public function __construct(AuthenticationInterface $auth, SessionStorageInterface $storage, ?SessionKeyGetterInterface $keyGetter = null)
    {
        $this->auth = $auth;
        $this->sessionStorage = $storage;
        if ($keyGetter !== null) {
            $this->sessionKey = $keyGetter->getSessionKey();
        } elseif ($auth instanceof SessionKeyGetterInterface) {
            $this->sessionKey = $auth->getSessionKey();
        } else {
            $this->sessionKey = uniqid('cargo_session_', true);
        }
    }

    public function hasToken(): bool
    {
        return null !== $this->sessionStorage->readToken($this->sessionKey);
    }

    public function validateToken(Client $client): void
    {
        try {
            $this->auth->validateToken($client);
        } catch (TokenInvalidException $e) {
            try {
                $this->sessionStorage->clearToken($this->sessionKey);
            } catch (\Exception $e) {
                throw new TokenInvalidException('Ошибка очистки данных сессии', 0, $e);
            }
            throw $e;
        }
    }

    public function getToken(): string
    {
        try {
            $token = $this->sessionStorage->readToken($this->sessionKey);
        } catch (SessionStorageException $e) {
            throw new TokenInvalidException('Ошибка чтения токена из данных сессий');
        }
        if ($token === null) {
            throw new TokenInvalidException('Не задан токен');
        }
        return $token;
    }

    public function requestNewToken(Client $client): void
    {
        $this->auth->requestNewToken($client);
        $token = $this->auth->getToken();

        try {
            $this->sessionStorage->storeToken($this->sessionKey, $token);
        } catch (\Exception $e) {
            throw new TokenInvalidException('Ошибка сохранения данных в сессию', 0, $e);
        }
    }
}
