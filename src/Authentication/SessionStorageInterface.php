<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Authentication;

use Cargomart\ApiClient\Authentication\exceptions\SessionStorageException;

interface SessionStorageInterface
{
    /**
     * @param string $key
     * @param string $token
     *
     * @throws SessionStorageException
     */
    public function storeToken(string $key, string $token): void;

    /**
     * @param string $key
     *
     * @throws SessionStorageException
     * @return string|null
     */
    public function readToken(string $key): ?string;

    /**
     * @param string $key
     *
     * @throws SessionStorageException
     */
    public function clearToken(string $key): void;
}
