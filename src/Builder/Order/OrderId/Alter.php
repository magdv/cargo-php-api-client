<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/alter
 */
final class Alter extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/alter';

    public function get(): AlterGet
    {
        return new AlterGet($this->client, $this->getUrl());
    }

    public function patch(): AlterPatch
    {
        return new AlterPatch($this->client, $this->getUrl());
    }
}
