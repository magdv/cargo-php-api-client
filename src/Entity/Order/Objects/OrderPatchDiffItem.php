<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;

/**
 * Информация по запросу на изменение заказа
 * source: order/objects/order-patch-diff-item.json
 *
 * @property string $type
 * @property string $consignorPrice
 * @property string $consignorPriceVatLess
 * @property string $carrierPrice
 * @property string $carrierPriceVatLess
 * @property int $truckTypeId
 * @property \stdClass $companyBranchId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property string $cargoType
 * @property TemperatureRange $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property string $comment
 * @property OrderPatchRoutePointCard[] $point
 * @property string $externalId
 * @property string[] $tag
 */
final class OrderPatchDiffItem extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'consignorPrice' => ['string'],
        'consignorPriceVatLess' => ['string'],
        'carrierPrice' => ['string'],
        'carrierPriceVatLess' => ['string'],
        'truckTypeId' => ['int'],
        'companyBranchId' => ['\stdClass'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'cargoType' => ['string'],
        'temperature' => ['Cargomart\ApiClient\Entity\Base\TemperatureRange'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'comment' => ['string'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderPatchRoutePointCard'],
        'externalId' => ['string'],
        'tag' => ['array', 'string'],
    ];

    protected static $nullables = [
        'type' => false,
        'consignorPrice' => false,
        'consignorPriceVatLess' => false,
        'carrierPrice' => false,
        'carrierPriceVatLess' => false,
        'truckTypeId' => false,
        'companyBranchId' => true,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'cargoType' => false,
        'temperature' => false,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'comment' => false,
        'point' => false,
        'externalId' => false,
        'tag' => false,
    ];
}
