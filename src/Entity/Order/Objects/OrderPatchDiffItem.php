<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация по запросу на изменение заказа
 * source: order/objects/order-patch-diff-item.json
 *
 * @property string $consignorPrice
 * @property string $carrierPrice
 * @property int $truckTypeId
 * @property \stdClass $companyBranchId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property string $cargoType
 * @property TemperatureRange $temperature
 * @property string[] $device
 * @property string[] $conditions
 * @property string $comment
 * @property RoutePointCard[] $point
 * @property string $externalId
 * @property string[] $tag
 */
final class OrderPatchDiffItem extends AbstractEntity
{
    protected static $types = [
        'consignorPrice' => ['string'],
        'carrierPrice' => ['string'],
        'truckTypeId' => ['int'],
        'companyBranchId' => ['\stdClass'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'cargoType' => ['string'],
        'temperature' => ['Cargomart\ApiClient\Entity\Order\Objects\TemperatureRange'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'comment' => ['string'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\RoutePointCard'],
        'externalId' => ['string'],
        'tag' => ['array', 'string'],
    ];

    protected static $nullables = [
        'consignorPrice' => false,
        'carrierPrice' => false,
        'truckTypeId' => false,
        'companyBranchId' => true,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'cargoType' => false,
        'temperature' => false,
        'device' => false,
        'conditions' => false,
        'comment' => false,
        'point' => false,
        'externalId' => false,
        'tag' => false,
    ];
}