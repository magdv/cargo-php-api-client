<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPublish\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateRange;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftRoutePoint;

/**
 * Набор полей объекта проектного заказа
 * source: order/OrderPublish/objects/order-publish-project-fields.json
 *
 * @property string $kind
 * @property string $priceType
 * @property DateRange $transportationPeriod
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
 * @property string $accessTypeId
 * @property string[] $accessClient
 * @property int $contractTypeId
 * @property string $price
 * @property string $stepBid
 * @property string $biddingType
 */
final class OrderDraftProjectFields extends AbstractEntity
{
    protected static $types = [
        'kind' => ['string'],
        'priceType' => ['string'],
        'transportationPeriod' => ['Cargomart\ApiClient\Entity\Base\DateRange'],
        'biddingStartDate' => ['string'],
        'biddingDuration' => ['int'],
        'repeatedOrderId' => ['string'],
        'copiedOrderId' => ['string'],
        'carriageDetail' => ['string'],
        'companyBranchId' => ['int'],
        'contact' => ['array', 'int'],
        'externalId' => ['string'],
        'routePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDraftRoutePoint'],
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
        'accessTypeId' => ['string'],
        'accessClient' => ['array', 'string'],
        'contractTypeId' => ['int'],
        'price' => ['string'],
        'stepBid' => ['string'],
        'biddingType' => ['string'],
    ];

    protected static $nullables = [
        'kind' => false,
        'priceType' => false,
        'transportationPeriod' => false,
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
        'accessTypeId' => false,
        'accessClient' => false,
        'contractTypeId' => false,
        'price' => false,
        'stepBid' => false,
        'biddingType' => false,
    ];
}
