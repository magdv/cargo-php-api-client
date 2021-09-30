<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Полная информация по запросу на изменение заказа
 * source: order/objects/order-correction-item.json
 *
 * @property string $status
 * @property \stdClass $companyBranchId
 * @property string $comment
 * @property int $truckTypeId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property string $cargoType
 * @property TemperatureRange $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property \stdClass $vatRate
 * @property string $currentPrice
 * @property RoutePointCard[] $point
 * @property int[] $contact
 * @property string $commentForConsignor
 * @property string $commentForCarrier
 * @property string $rejectionReason
 */
final class OrderCorrectionItem extends AbstractEntity
{
    protected static $types = [
        'status' => ['string'],
        'companyBranchId' => ['\stdClass'],
        'comment' => ['string'],
        'truckTypeId' => ['int'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'cargoType' => ['string'],
        'temperature' => ['Cargomart\ApiClient\Entity\Order\Objects\TemperatureRange'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'vatRate' => ['\stdClass'],
        'currentPrice' => ['string'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\RoutePointCard'],
        'contact' => ['array', 'int'],
        'commentForConsignor' => ['string'],
        'commentForCarrier' => ['string'],
        'rejectionReason' => ['string'],
    ];

    protected static $nullables = [
        'status' => false,
        'companyBranchId' => true,
        'comment' => false,
        'truckTypeId' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'cargoType' => false,
        'temperature' => false,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'vatRate' => true,
        'currentPrice' => false,
        'point' => false,
        'contact' => false,
        'commentForConsignor' => false,
        'commentForCarrier' => false,
        'rejectionReason' => false,
    ];
}
