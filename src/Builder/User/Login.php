<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/login
 */
final class Login extends AbstractBuilder
{
    protected const URL = '/api/v2/user/login';

    public function post(): LoginPost
    {
        return new LoginPost($this->client, $this->getUrl());
    }
}
