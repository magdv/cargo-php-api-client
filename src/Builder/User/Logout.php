<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/logout
 */
final class Logout extends AbstractBuilder
{
    protected const URL = '/api/v2/user/logout';

    public function post(): LogoutPost
    {
        return new LogoutPost($this->client, $this->getUrl());
    }
}
