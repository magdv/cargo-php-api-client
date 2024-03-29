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
 * source: order/objects/order-correction-history-item.json
 *
 * @property int $truckTypeId
 * @property \stdClass $companyBranchId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property string $cargoType
 * @property TemperatureRange $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property \stdClass $vatRate
 * @property string $currentPrice
 * @property string $currencyCode
 * @property string $comment
 * @property RoutePointCard[] $point
 * @property int[] $contact
 */
final class OrderCorrectionHistoryItem extends AbstractEntity
{
    protected static $types = [
        'truckTypeId' => ['int'],
        'companyBranchId' => ['\stdClass'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'cargoType' => ['string'],
        'temperature' => ['Cargomart\ApiClient\Entity\Base\TemperatureRange'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'vatRate' => ['\stdClass'],
        'currentPrice' => ['string'],
        'currencyCode' => ['string'],
        'comment' => ['string'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\RoutePointCard'],
        'contact' => ['array', 'int'],
    ];

    protected static $nullables = [
        'truckTypeId' => false,
        'companyBranchId' => true,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'cargoType' => false,
        'temperature' => false,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'vatRate' => true,
        'currentPrice' => false,
        'currencyCode' => false,
        'comment' => false,
        'point' => false,
        'contact' => false,
    ];
}
