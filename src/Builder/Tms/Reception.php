<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/tms/reception
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tms;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/tms/reception
 */
final class Reception extends AbstractBuilder
{
    protected const URL = '/api/v2/tms/reception';

    public function post(): ReceptionPost
    {
        return new ReceptionPost($this->client, $this->getUrl());
    }
}
