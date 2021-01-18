<?php

namespace Cargomart\ApiClient\Authentication;

use Cargomart\ApiClient\Authentication\exceptions\LoginPasswordInvalidException;
use Cargomart\ApiClient\Authentication\exceptions\TokenInvalidException;
use Cargomart\ApiClient\Client;
use Cargomart\ApiClient\Entity\User\Requests\UserLoginRequest;
use Cargomart\ApiClient\Exceptions\CargomartClientException;

class LoginPasswordAuthentication implements AuthenticationInterface, SessionKeyGetterInterface
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var null|string
     */
    private $token;

    /**
     * LoginPasswordAuthentication constructor.
     *
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function hasToken(): bool
    {
        return null !== $this->token;
    }

    /**
     * Проверка что токен не протух
     *
     * @param Client $client
     *
     * @throws CargomartClientException
     * @throws TokenInvalidException
     */
    public function validateToken(Client $client): void
    {
        $res = $client->apiV2()->user()->userSelf()->get()->do();
        if (! $res->status->isOk()) {
            $this->token = null;

            throw new TokenInvalidException('Невалидный токен');
        }
    }

    public function getToken(): string
    {
        if ($this->token === null) {
            throw new TokenInvalidException('Не задан токен');
        }
        return $this->token;
    }

    /**
     * Запрос нового токена
     *
     * @param Client $client
     *
     * @throws LoginPasswordInvalidException
     * @throws TokenInvalidException
     * @throws CargomartClientException
     */
    public function requestNewToken(Client $client): void
    {
        $body = new UserLoginRequest();

        $body->login = $this->login;
        $body->password = $this->password;

        $req = $client->apiV2()->user()->login()->post();

        $rsp = $req->do($body);
        if (! $rsp->status->isOk()) {
            throw new LoginPasswordInvalidException('Неверный логин/пароль');
        }

        $this->token = $rsp->data->token->token;
    }

    public function getSessionKey(): string
    {
        return md5(__CLASS__ . $this->login . $this->password);
    }
}
