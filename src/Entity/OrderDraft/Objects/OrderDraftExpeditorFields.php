<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\OrderDraft\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftRoutePoint;

/**
 * Набор полей объекта экспедиторского заказа
 * source: order-draft/objects/order-draft-expeditor-fields.json
 *
 * @property string $kind
 * @property string $priceStrategyType
 * @property int[] $loading
 * @property string[] $device
 * @property string $repeatedOrderId
 * @property string $copiedOrderId
 * @property string $carriageDetail
 * @property int $companyBranchId
 * @property int[] $contact
 * @property string $externalId
 * @property OrderDraftRoutePoint[] $routePoint
 * @property int $truckTypeId
 * @property float $cargoWeight
 * @property int $cargoCapacity
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
 */
final class OrderDraftExpeditorFields extends AbstractEntity
{
    protected static $types = [
        'kind' => ['string'],
        'priceStrategyType' => ['string'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'repeatedOrderId' => ['string'],
        'copiedOrderId' => ['string'],
        'carriageDetail' => ['string'],
        'companyBranchId' => ['int'],
        'contact' => ['array', 'int'],
        'externalId' => ['string'],
        'routePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftRoutePoint'],
        'truckTypeId' => ['int'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
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
    ];

    protected static $nullables = [
        'kind' => false,
        'priceStrategyType' => false,
        'loading' => false,
        'device' => false,
        'repeatedOrderId' => false,
        'copiedOrderId' => false,
        'carriageDetail' => false,
        'companyBranchId' => false,
        'contact' => false,
        'externalId' => false,
        'routePoint' => false,
        'truckTypeId' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
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
    ];
}
