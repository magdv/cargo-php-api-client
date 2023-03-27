<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/responses/price-local-item-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Expeditor\Objects\PriceLocal;
use Cargomart\ApiClient\Entity\Expeditor\Objects\PriceLocalPool;

/**
 * Данные списка цен
 * source: expeditor/responses/price-local-item-response.json#/properties/data
 *
 * @property PriceLocal $priceLocal
 * @property PriceLocalPool[] $priceLocalPool
 */
final class PriceLocalItemResponseData extends AbstractEntity
{
    protected static $types = [
        'priceLocal' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\PriceLocal'],
        'priceLocalPool' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\PriceLocalPool'],
    ];

    protected static $nullables = ['priceLocal' => false, 'priceLocalPool' => false];
}
