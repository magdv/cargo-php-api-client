<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Objects\PriceLocalPool;

/**
 * Данные списка цен
 * source: expeditor/PriceLocal/responses/price-local-pool-item-response.json#/properties/data
 *
 * @property PriceLocalPool $priceLocalPool
 */
final class PriceLocalPoolItemResponseData extends AbstractEntity
{
    protected static $types = [
        'priceLocalPool' => ['Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Objects\PriceLocalPool'],
    ];

    protected static $nullables = ['priceLocalPool' => false];
}
