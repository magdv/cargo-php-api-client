<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPublish\Mixins;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftRoutePoint;

/**
 * Общие поля заказа
 * source: order/OrderPublish/mixins/order-publish-common-mixin.json
 *
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
 */
final class OrderPublishCommonMixin extends AbstractEntity
{
    protected static $types = [
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
    ];

    protected static $nullables = [
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
    ];
}
