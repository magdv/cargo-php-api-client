<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Authentication;

use Cargomart\ApiClient\Authentication\exceptions\SessionStorageException;
use Psr\SimpleCache\CacheInterface;

class PsrCacheSessionStorage implements SessionStorageInterface
{
    private const KEY_PREFIX = 'cargo_client_auth_store-';

    /**
     * @var CacheInterface
     */
    private $cache;
    /**
     * @var int|null
     */
    private $tokenTtl;

    public function __construct(CacheInterface $cache, ?int $tokenTtl = null)
    {
        $this->cache = $cache;
        $this->tokenTtl = $tokenTtl;
    }

    public function storeToken(string $key, string $token): void
    {
        try {
            $this->cache->set(self::KEY_PREFIX . $key, $token, $this->tokenTtl);
        } catch (\Exception $e) {
            throw new SessionStorageException('Ошибка при сохранении данных', 0, $e);
        }
    }

    public function readToken(string $key): ?string
    {
        try {
            $token = $this->cache->get(self::KEY_PREFIX . $key);
        } catch (\Exception $e) {
            throw new SessionStorageException('Ошибка при чтении данных', 0, $e);
        }

        return $token;
    }

    public function clearToken(string $key): void
    {
        try {
            $this->cache->delete(self::KEY_PREFIX . $key);
        } catch (\Exception $e) {
            throw new SessionStorageException('Ошибка при удалении данных', 0, $e);
        }
    }
}
