<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Полная информация по черновику заказа FTL
 * source: order/objects/order-draft-ftl-edit-item.json
 *
 * @property string $id
 * @property string $orderId
 * @property int $version
 * @property string $date
 * @property int $serialId
 * @property int $statusId
 * @property int $extStatusId
 * @property string $comment
 * @property int $truckTypeId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property string $cargoType
 * @property TemperatureRange $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property int $paymentTypeId
 * @property string $paymentDetail
 * @property string $currencyCode
 * @property float $vatRate
 * @property string $openPrice
 * @property string $stepBid
 * @property string $type
 * @property string $accessTypeId
 * @property string $startDate
 * @property string $endDate
 * @property int $duration
 * @property OrderDraftFtlPoint[] $route
 * @property int $contractTypeId
 * @property int[] $contact
 * @property string[] $tags
 * @property string $externalId
 * @property int $companyBranchId
 * @property OrderAccess $access
 */
final class OrderDraftFtlEditItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'orderId' => ['string'],
        'version' => ['int'],
        'date' => ['string'],
        'serialId' => ['int'],
        'statusId' => ['int'],
        'extStatusId' => ['int'],
        'comment' => ['string'],
        'truckTypeId' => ['int'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'cargoType' => ['string'],
        'temperature' => ['Cargomart\ApiClient\Entity\Order\Objects\TemperatureRange'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'paymentTypeId' => ['int'],
        'paymentDetail' => ['string'],
        'currencyCode' => ['string'],
        'vatRate' => ['float'],
        'openPrice' => ['string'],
        'stepBid' => ['string'],
        'type' => ['string'],
        'accessTypeId' => ['string'],
        'startDate' => ['string'],
        'endDate' => ['string'],
        'duration' => ['int'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDraftFtlPoint'],
        'contractTypeId' => ['int'],
        'contact' => ['array', 'int'],
        'tags' => ['array', 'string'],
        'externalId' => ['string'],
        'companyBranchId' => ['int'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'orderId' => false,
        'version' => false,
        'date' => false,
        'serialId' => false,
        'statusId' => false,
        'extStatusId' => false,
        'comment' => false,
        'truckTypeId' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'cargoType' => false,
        'temperature' => false,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'paymentTypeId' => false,
        'paymentDetail' => false,
        'currencyCode' => false,
        'vatRate' => false,
        'openPrice' => false,
        'stepBid' => false,
        'type' => false,
        'accessTypeId' => false,
        'startDate' => false,
        'endDate' => false,
        'duration' => false,
        'route' => false,
        'contractTypeId' => false,
        'contact' => false,
        'tags' => false,
        'externalId' => false,
        'companyBranchId' => false,
        'access' => false,
    ];
}
