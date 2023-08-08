<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
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
 * @property OrderDetails[] $details
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
 * @property string $vat
 * @property string $vatLessPrice
 * @property string $openPrice
 * @property string $currentPrice
 * @property string $stepBid
 * @property bool $isNoPrice
 * @property bool $isRound
 * @property bool $isView
 * @property string $type
 * @property string $priceStrategyType
 * @property string $biddingType
 * @property int[] $protectedBidReason
 * @property int $viewCount
 * @property int $pinCount
 * @property int $bidCount
 * @property int $commentCount
 * @property string $consignorId
 * @property string $accessTypeId
 * @property string $createDate
 * @property string $startDate
 * @property string $endDate
 * @property int $duration
 * @property string $name
 * @property RoutePointEdit[] $point
 * @property int[] $contact
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
 * @property int[] $generalPartnerContact
 * @property int $companyBranchId
 * @property bool $isProxyDateEnd
 * @property OrderOfferCarRequest $carRequest
 * @property string $recommendedPrice
 * @property ProgressItemListProgress[] $progress
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
        'details' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDetails'],
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
        'vat' => ['string'],
        'vatLessPrice' => ['string'],
        'openPrice' => ['string'],
        'currentPrice' => ['string'],
        'stepBid' => ['string'],
        'isNoPrice' => ['bool'],
        'isRound' => ['bool'],
        'isView' => ['bool'],
        'type' => ['string'],
        'priceStrategyType' => ['string'],
        'biddingType' => ['string'],
        'protectedBidReason' => ['array', 'int'],
        'viewCount' => ['int'],
        'pinCount' => ['int'],
        'bidCount' => ['int'],
        'commentCount' => ['int'],
        'consignorId' => ['string'],
        'accessTypeId' => ['string'],
        'createDate' => ['string'],
        'startDate' => ['string'],
        'endDate' => ['string'],
        'duration' => ['int'],
        'name' => ['string'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\RoutePointEdit'],
        'contact' => ['array', 'int'],
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
        'generalPartnerContact' => ['array', 'int'],
        'companyBranchId' => ['int'],
        'isProxyDateEnd' => ['bool'],
        'carRequest' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderOfferCarRequest'],
        'recommendedPrice' => ['string'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ProgressItemListProgress'],
        'params' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderEditParams'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'statusId' => false,
        'extStatusId' => false,
        'comment' => false,
        'details' => false,
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
        'vat' => false,
        'vatLessPrice' => false,
        'openPrice' => false,
        'currentPrice' => false,
        'stepBid' => false,
        'isNoPrice' => false,
        'isRound' => false,
        'isView' => false,
        'type' => false,
        'priceStrategyType' => false,
        'biddingType' => false,
        'protectedBidReason' => false,
        'viewCount' => false,
        'pinCount' => false,
        'bidCount' => false,
        'commentCount' => false,
        'consignorId' => false,
        'accessTypeId' => false,
        'createDate' => false,
        'startDate' => false,
        'endDate' => false,
        'duration' => false,
        'name' => false,
        'point' => false,
        'contact' => false,
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
        'generalPartnerContact' => false,
        'companyBranchId' => false,
        'isProxyDateEnd' => false,
        'carRequest' => false,
        'recommendedPrice' => false,
        'progress' => false,
        'params' => false,
        'access' => false,
    ];
}
