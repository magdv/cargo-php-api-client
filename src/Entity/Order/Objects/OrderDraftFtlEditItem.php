<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;

/**
 * Полная информация по черновику заказа FTL
 * source: order/objects/order-draft-ftl-edit-item.json
 *
 * @property string $id
 * @property string $orderId
 * @property string $repeatedOrderId
 * @property string $copiedOrderId
 * @property int $serialId
 * @property int $statusId
 * @property int $extStatusId
 * @property int $version
 * @property string $carriageDetail
 * @property string $consignorId
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
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property int $paymentTypeId
 * @property string $paymentDetail
 * @property string $currencyCode
 * @property bool $isMultiCurrency
 * @property float $vatRate
 * @property string $priceType
 * @property string $openPrice
 * @property string $stepBid
 * @property string $biddingType
 * @property string $biddingStartDate
 * @property string $biddingEndDate
 * @property int $biddingDuration
 * @property string $accessTypeId
 * @property string[] $accessClient
 * @property int $contractTypeId
 * @property string[] $tag
 * @property OrderDraftFtlAccess $access
 */
final class OrderDraftFtlEditItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'orderId' => ['string'],
        'repeatedOrderId' => ['string'],
        'copiedOrderId' => ['string'],
        'serialId' => ['int'],
        'statusId' => ['int'],
        'extStatusId' => ['int'],
        'version' => ['int'],
        'carriageDetail' => ['string'],
        'consignorId' => ['string'],
        'companyBranchId' => ['int'],
        'contact' => ['array', 'int'],
        'externalId' => ['string'],
        'routePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDraftRoutePoint'],
        'truckTypeId' => ['int'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'cargoType' => ['string'],
        'temperature' => ['Cargomart\ApiClient\Entity\Base\TemperatureRange'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'paymentTypeId' => ['int'],
        'paymentDetail' => ['string'],
        'currencyCode' => ['string'],
        'isMultiCurrency' => ['bool'],
        'vatRate' => ['float'],
        'priceType' => ['string'],
        'openPrice' => ['string'],
        'stepBid' => ['string'],
        'biddingType' => ['string'],
        'biddingStartDate' => ['string'],
        'biddingEndDate' => ['string'],
        'biddingDuration' => ['int'],
        'accessTypeId' => ['string'],
        'accessClient' => ['array', 'string'],
        'contractTypeId' => ['int'],
        'tag' => ['array', 'string'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDraftFtlAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'orderId' => false,
        'repeatedOrderId' => false,
        'copiedOrderId' => false,
        'serialId' => false,
        'statusId' => false,
        'extStatusId' => false,
        'version' => false,
        'carriageDetail' => false,
        'consignorId' => false,
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
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'paymentTypeId' => false,
        'paymentDetail' => false,
        'currencyCode' => false,
        'isMultiCurrency' => false,
        'vatRate' => false,
        'priceType' => false,
        'openPrice' => false,
        'stepBid' => false,
        'biddingType' => false,
        'biddingStartDate' => false,
        'biddingEndDate' => false,
        'biddingDuration' => false,
        'accessTypeId' => false,
        'accessClient' => false,
        'contractTypeId' => false,
        'tag' => false,
        'access' => false,
    ];
}
