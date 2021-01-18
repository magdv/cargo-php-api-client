<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderOfferCarRequest;
use Cargomart\ApiClient\Entity\Order\Objects\TemperatureRange;

/**
 * Данные для редактирования объекта заказа
 * source: order/requests/order-edit-request.json
 *
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
 * @property bool $isNoPrice
 * @property string $type
 * @property string $accessTypeId
 * @property int $contractTypeId
 * @property string $startDate
 * @property string $endDate
 * @property int $duration
 * @property string $name
 * @property string $externalId
 * @property string $periodFromDate
 * @property string $periodToDate
 * @property string $priceType
 * @property OrderOfferCarRequest $carRequest
 * @property int $companyBranchId
 */
final class OrderEditRequest extends AbstractEntity
{
    protected static $types = [
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
        'isNoPrice' => ['bool'],
        'type' => ['string'],
        'accessTypeId' => ['string'],
        'contractTypeId' => ['int'],
        'startDate' => ['string'],
        'endDate' => ['string'],
        'duration' => ['int'],
        'name' => ['string'],
        'externalId' => ['string'],
        'periodFromDate' => ['string'],
        'periodToDate' => ['string'],
        'priceType' => ['string'],
        'carRequest' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderOfferCarRequest'],
        'companyBranchId' => ['int'],
    ];

    protected static $nullables = [
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
        'isNoPrice' => false,
        'type' => false,
        'accessTypeId' => false,
        'contractTypeId' => false,
        'startDate' => false,
        'endDate' => false,
        'duration' => false,
        'name' => false,
        'externalId' => false,
        'periodFromDate' => false,
        'periodToDate' => false,
        'priceType' => false,
        'carRequest' => false,
        'companyBranchId' => false,
    ];
}
