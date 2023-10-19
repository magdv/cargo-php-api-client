<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Auth\Login;
use Cargomart\ApiClient\Builder\Auth\Logout;
use Cargomart\ApiClient\Builder\Auth\RefreshToken;

/**
 * url: /api/v2/auth
 */
final class Auth extends AbstractBuilder
{
    protected const URL = '/api/v2/auth';

    public function login(): Login
    {
        return new Login($this->params, $this->client);
    }

    public function logout(): Logout
    {
        return new Logout($this->params, $this->client);
    }

    public function refreshToken(): RefreshToken
    {
        return new RefreshToken($this->params, $this->client);
    }
}
