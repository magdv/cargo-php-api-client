<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-edit-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Полная информация по заказу, карточка заказа
 * source: order/objects/order-edit-item.json
 *
 * @property string $id
 * @property int $serialId
 * @property int $statusId
 * @property int $extStatusId
 * @property string $comment
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
 * @property bool $isNoPrice
 * @property string $type
 * @property string $accessTypeId
 * @property string $startDate
 * @property string $endDate
 * @property int $duration
 * @property string $name
 * @property RoutePointEdit[] $point
 * @property string $externalId
 * @property int $lastUpdate
 * @property string $refuseReasonCode
 * @property string $refuseReasonComment
 * @property string $refuseDate
 * @property string $priceType
 * @property string $periodFromDate
 * @property string $periodToDate
 * @property string $kind
 * @property bool $isGeneralPartner
 * @property string $generalPartnerId
 * @property ModerationMessage[] $moderationMessage
 * @property string $generalPartnerContractId
 * @property int $companyBranchId
 * @property OrderOfferCarRequest $carRequest
 * @property string $recommendedPrice
 * @property ProgressItem[] $progress
 * @property OrderEditParams $params
 * @property OrderAccess $access
 */
final class OrderEditItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'statusId' => ['int'],
        'extStatusId' => ['int'],
        'comment' => ['string'],
        'truckTypeId' => ['int'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'cargoType' => ['string'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'temperature' => ['Cargomart\ApiClient\Entity\Order\Objects\TemperatureRange'],
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
        'startDate' => ['string'],
        'endDate' => ['string'],
        'duration' => ['int'],
        'name' => ['string'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\RoutePointEdit'],
        'externalId' => ['string'],
        'lastUpdate' => ['int'],
        'refuseReasonCode' => ['string'],
        'refuseReasonComment' => ['string'],
        'refuseDate' => ['string'],
        'priceType' => ['string'],
        'periodFromDate' => ['string'],
        'periodToDate' => ['string'],
        'kind' => ['string'],
        'isGeneralPartner' => ['bool'],
        'generalPartnerId' => ['string'],
        'moderationMessage' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ModerationMessage'],
        'generalPartnerContractId' => ['string'],
        'companyBranchId' => ['int'],
        'carRequest' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderOfferCarRequest'],
        'recommendedPrice' => ['string'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ProgressItem'],
        'params' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderEditParams'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'statusId' => false,
        'extStatusId' => false,
        'comment' => false,
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
        'isNoPrice' => false,
        'type' => false,
        'accessTypeId' => false,
        'startDate' => false,
        'endDate' => false,
        'duration' => false,
        'name' => false,
        'point' => false,
        'externalId' => false,
        'lastUpdate' => false,
        'refuseReasonCode' => false,
        'refuseReasonComment' => false,
        'refuseDate' => false,
        'priceType' => false,
        'periodFromDate' => false,
        'periodToDate' => false,
        'kind' => false,
        'isGeneralPartner' => false,
        'generalPartnerId' => false,
        'moderationMessage' => false,
        'generalPartnerContractId' => false,
        'companyBranchId' => false,
        'carRequest' => false,
        'recommendedPrice' => false,
        'progress' => false,
        'params' => false,
        'access' => false,
    ];
}
