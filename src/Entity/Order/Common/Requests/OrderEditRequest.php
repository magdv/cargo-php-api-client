<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderEditParams;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderOfferCarRequest;

/**
 * Данные для редактирования объекта заказа
 * source: order/Common/requests/order-edit-request.json
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
 * @property bool $isMultiCurrency
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
 * @property OrderEditParams $params
 */
final class OrderEditRequest extends AbstractEntity
{
    protected static $types = [
        'comment' => ['string'],
        'truckTypeId' => ['int'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
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
        'carRequest' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderOfferCarRequest'],
        'companyBranchId' => ['int'],
        'params' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderEditParams'],
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
        'isMultiCurrency' => false,
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
        'params' => false,
    ];
}
