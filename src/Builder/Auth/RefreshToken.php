<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Auth;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/auth/refresh-token
 */
final class RefreshToken extends AbstractBuilder
{
    protected const URL = '/api/v2/auth/refresh-token';

    public function post(): RefreshTokenPost
    {
        return new RefreshTokenPost($this->client, $this->getUrl());
    }
}
