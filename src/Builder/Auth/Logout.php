<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/auth/logout
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Auth;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/auth/logout
 */
final class Logout extends AbstractBuilder
{
    protected const URL = '/api/v2/auth/logout';

    public function post(): LogoutPost
    {
        return new LogoutPost($this->client, $this->getUrl());
    }
}
