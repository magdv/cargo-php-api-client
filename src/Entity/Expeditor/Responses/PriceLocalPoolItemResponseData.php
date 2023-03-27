<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/responses/price-local-pool-item-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Expeditor\Objects\PriceLocalPool;

/**
 * Данные списка цен
 * source: expeditor/responses/price-local-pool-item-response.json#/properties/data
 *
 * @property PriceLocalPool $priceLocalPool
 */
final class PriceLocalPoolItemResponseData extends AbstractEntity
{
    protected static $types = ['priceLocalPool' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\PriceLocalPool']];
    protected static $nullables = ['priceLocalPool' => false];
}
