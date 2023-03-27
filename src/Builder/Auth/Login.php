<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/auth/login
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Auth;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/auth/login
 */
final class Login extends AbstractBuilder
{
    protected const URL = '/api/v2/auth/login';

    public function post(): LoginPost
    {
        return new LoginPost($this->client, $this->getUrl());
    }
}
