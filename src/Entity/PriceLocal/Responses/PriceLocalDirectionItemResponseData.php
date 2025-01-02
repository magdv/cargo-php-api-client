<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PriceLocal\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocalDirection;
use Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocalPool;

/**
 * Данные списка направлений
 * source: price-local/responses/price-local-direction-item-response.json#/properties/data
 *
 * @property PriceLocalDirection $priceLocalDirection
 * @property PriceLocalPool[] $priceLocalPool
 * @property Locality[] $locality
 */
final class PriceLocalDirectionItemResponseData extends AbstractEntity
{
    protected static $types = [
        'priceLocalDirection' => ['Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocalDirection'],
        'priceLocalPool' => ['array', 'Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocalPool'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
    ];

    protected static $nullables = ['priceLocalDirection' => false, 'priceLocalPool' => false, 'locality' => false];
}
