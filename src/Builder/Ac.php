<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/ac
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Ac\PriceLocalPool;
use Cargomart\ApiClient\Builder\Ac\StoragePoint;

/**
 * url: /api/v2/ac
 */
final class Ac extends AbstractBuilder
{
    protected const URL = '/api/v2/ac';

    public function priceLocalPool(): PriceLocalPool
    {
        return new PriceLocalPool($this->params, $this->client);
    }

    public function storagePoint(): StoragePoint
    {
        return new StoragePoint($this->params, $this->client);
    }
}
