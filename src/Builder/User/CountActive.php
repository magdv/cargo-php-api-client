<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/user/count-active
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/count-active
 */
final class CountActive extends AbstractBuilder
{
    protected const URL = '/api/v2/user/count-active';

    public function get(): CountActiveGet
    {
        return new CountActiveGet($this->client, $this->getUrl());
    }
}
