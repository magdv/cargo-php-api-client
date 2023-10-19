<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект с ценами
 * source: expeditor/objects/price-local.json
 *
 * @property int $id
 * @property int $poolId
 * @property int $truckTypeId
 * @property string $consignorPrice
 * @property string $carrierPrice
 * @property string $carrierPriceTomorrow
 * @property bool $isActive
 * @property PriceLocalAccess $access
 */
final class PriceLocal extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'poolId' => ['int'],
        'truckTypeId' => ['int'],
        'consignorPrice' => ['string'],
        'carrierPrice' => ['string'],
        'carrierPriceTomorrow' => ['string'],
        'isActive' => ['bool'],
        'access' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\PriceLocalAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'poolId' => false,
        'truckTypeId' => false,
        'consignorPrice' => false,
        'carrierPrice' => false,
        'carrierPriceTomorrow' => false,
        'isActive' => false,
        'access' => false,
    ];
}
