<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftRoutePoint;

/**
 * Данные для редактирования объекта заказа FTL
 * source: order/Common/requests/order-draft-ftl-request.json
 *
 * @property int $version
 * @property string $carriageDetail
 * @property int $companyBranchId
 * @property string $externalId
 * @property OrderDraftRoutePoint[] $routePoint
 * @property int $truckTypeId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property string $cargoType
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property TemperatureRange $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property int $paymentTypeId
 * @property string $paymentDetail
 * @property string $currencyCode
 * @property bool $isMultiCurrency
 * @property float $vatRate
 * @property string $openPrice
 * @property string $stepBid
 * @property int[] $contact
 * @property string $biddingType
 * @property string $biddingStartDate
 * @property string $biddingEndDate
 * @property int $biddingDuration
 * @property string $accessTypeId
 * @property string[] $accessClient
 * @property int $contractTypeId
 * @property string[] $tag
 * @property string $repeatedOrderId
 * @property string $copiedOrderId
 */
final class OrderDraftFtlRequest extends AbstractEntity
{
    protected static $types = [
        'version' => ['int'],
        'carriageDetail' => ['string'],
        'companyBranchId' => ['int'],
        'externalId' => ['string'],
        'routePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftRoutePoint'],
        'truckTypeId' => ['int'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'cargoType' => ['string'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'temperature' => ['Cargomart\ApiClient\Entity\Base\TemperatureRange'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'paymentTypeId' => ['int'],
        'paymentDetail' => ['string'],
        'currencyCode' => ['string'],
        'isMultiCurrency' => ['bool'],
        'vatRate' => ['float'],
        'openPrice' => ['string'],
        'stepBid' => ['string'],
        'contact' => ['array', 'int'],
        'biddingType' => ['string'],
        'biddingStartDate' => ['string'],
        'biddingEndDate' => ['string'],
        'biddingDuration' => ['int'],
        'accessTypeId' => ['string'],
        'accessClient' => ['array', 'string'],
        'contractTypeId' => ['int'],
        'tag' => ['array', 'string'],
        'repeatedOrderId' => ['string'],
        'copiedOrderId' => ['string'],
    ];

    protected static $nullables = [
        'version' => false,
        'carriageDetail' => false,
        'companyBranchId' => false,
        'externalId' => false,
        'routePoint' => false,
        'truckTypeId' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'cargoType' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'temperature' => false,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'paymentTypeId' => false,
        'paymentDetail' => false,
        'currencyCode' => false,
        'isMultiCurrency' => false,
        'vatRate' => false,
        'openPrice' => false,
        'stepBid' => false,
        'contact' => false,
        'biddingType' => false,
        'biddingStartDate' => false,
        'biddingEndDate' => false,
        'biddingDuration' => false,
        'accessTypeId' => false,
        'accessClient' => false,
        'contractTypeId' => false,
        'tag' => false,
        'repeatedOrderId' => false,
        'copiedOrderId' => false,
    ];
}
