<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPublish\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftRoutePoint;

/**
 * Набор полей объекта ftl заказа
 * source: order/OrderPublish/objects/order-publish-ftl-fields.json
 *
 * @property string $kind
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property int[] $loading
 * @property string[] $device
 * @property bool $isMultiCurrency
 * @property string $biddingStartDate
 * @property int $biddingDuration
 * @property string $repeatedOrderId
 * @property string $copiedOrderId
 * @property string $carriageDetail
 * @property int $companyBranchId
 * @property int[] $contact
 * @property string $externalId
 * @property OrderDraftRoutePoint[] $routePoint
 * @property int $truckTypeId
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property string $cargoType
 * @property TemperatureRange $temperature
 * @property string[] $conditions
 * @property int $paymentTypeId
 * @property string $paymentDetail
 * @property string $currencyCode
 * @property float $vatRate
 * @property string $biddingEndDate
 * @property string[] $tag
 * @property string $price
 * @property string $stepBid
 * @property string $biddingType
 * @property string $accessTypeId
 * @property string[] $accessClient
 * @property int $contractTypeId
 */
final class OrderDraftFtlFields extends AbstractEntity
{
    protected static $types = [
        'kind' => ['string'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'isMultiCurrency' => ['bool'],
        'biddingStartDate' => ['string'],
        'biddingDuration' => ['int'],
        'repeatedOrderId' => ['string'],
        'copiedOrderId' => ['string'],
        'carriageDetail' => ['string'],
        'companyBranchId' => ['int'],
        'contact' => ['array', 'int'],
        'externalId' => ['string'],
        'routePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftRoutePoint'],
        'truckTypeId' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'cargoType' => ['string'],
        'temperature' => ['Cargomart\ApiClient\Entity\Base\TemperatureRange'],
        'conditions' => ['array', 'string'],
        'paymentTypeId' => ['int'],
        'paymentDetail' => ['string'],
        'currencyCode' => ['string'],
        'vatRate' => ['float'],
        'biddingEndDate' => ['string'],
        'tag' => ['array', 'string'],
        'price' => ['string'],
        'stepBid' => ['string'],
        'biddingType' => ['string'],
        'accessTypeId' => ['string'],
        'accessClient' => ['array', 'string'],
        'contractTypeId' => ['int'],
    ];

    protected static $nullables = [
        'kind' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'loading' => false,
        'device' => false,
        'isMultiCurrency' => false,
        'biddingStartDate' => false,
        'biddingDuration' => false,
        'repeatedOrderId' => false,
        'copiedOrderId' => false,
        'carriageDetail' => false,
        'companyBranchId' => false,
        'contact' => false,
        'externalId' => false,
        'routePoint' => false,
        'truckTypeId' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'cargoType' => false,
        'temperature' => false,
        'conditions' => false,
        'paymentTypeId' => false,
        'paymentDetail' => false,
        'currencyCode' => false,
        'vatRate' => false,
        'biddingEndDate' => false,
        'tag' => false,
        'price' => false,
        'stepBid' => false,
        'biddingType' => false,
        'accessTypeId' => false,
        'accessClient' => false,
        'contractTypeId' => false,
    ];
}
