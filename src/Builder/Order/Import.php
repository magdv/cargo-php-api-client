<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/import
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/import
 */
final class Import extends AbstractBuilder
{
    protected const URL = '/api/v2/order/import';

    public function get(): ImportGet
    {
        return new ImportGet($this->client, $this->getUrl());
    }

    public function post(): ImportPost
    {
        return new ImportPost($this->client, $this->getUrl());
    }
}
