<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/responses/price-local-direction-item-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Expeditor\Objects\PriceLocalDirection;
use Cargomart\ApiClient\Entity\Expeditor\Objects\PriceLocalPool;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;

/**
 * Данные списка направлений
 * source: expeditor/responses/price-local-direction-item-response.json#/properties/data
 *
 * @property PriceLocalDirection $priceLocalDirection
 * @property PriceLocalPool[] $priceLocalPool
 * @property Locality[] $locality
 */
final class PriceLocalDirectionItemResponseData extends AbstractEntity
{
    protected static $types = [
        'priceLocalDirection' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\PriceLocalDirection'],
        'priceLocalPool' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\PriceLocalPool'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
    ];

    protected static $nullables = ['priceLocalDirection' => false, 'priceLocalPool' => false, 'locality' => false];
}
