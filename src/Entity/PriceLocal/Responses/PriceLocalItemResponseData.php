<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PriceLocal\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocal;
use Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocalPool;

/**
 * Данные списка цен
 * source: price-local/responses/price-local-item-response.json#/properties/data
 *
 * @property PriceLocal $priceLocal
 * @property PriceLocalPool[] $priceLocalPool
 */
final class PriceLocalItemResponseData extends AbstractEntity
{
    protected static $types = [
        'priceLocal' => ['Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocal'],
        'priceLocalPool' => ['array', 'Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocalPool'],
    ];

    protected static $nullables = ['priceLocal' => false, 'priceLocalPool' => false];
}
