<?php

namespace Cargomart\ApiClient\Authentication;

use Cargomart\ApiClient\Authentication\exceptions\LoginPasswordInvalidException;
use Cargomart\ApiClient\Authentication\exceptions\TokenInvalidException;
use Cargomart\ApiClient\Client;
use Cargomart\ApiClient\Exceptions\CargomartClientException;

interface AuthenticationInterface
{
    /**
     * Проверка, что токен получен и существует.
     *
     * @return bool
     */
    public function hasToken(): bool;

    /**
     * Проверка, что токен валиден, т.е. не истек на стороне сервиса.
     * @param Client $client
     *
     * @throws TokenInvalidException
     * @throws CargomartClientException
     */
    public function validateToken(Client $client): void;

    /**
     * Запросить новый токен.
     *
     * @param Client $client
     * @throws LoginPasswordInvalidException
     */
    public function requestNewToken(Client $client): void;

    /**
     * Вернуть текущий токен.
     *
     * @return string
     *
     * @throws TokenInvalidException
     */
    public function getToken(): string;
}
