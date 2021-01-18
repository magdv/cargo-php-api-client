<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/token
 */
final class Token extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/token';

    public function post(): TokenPost
    {
        return new TokenPost($this->client, $this->getUrl());
    }
}
