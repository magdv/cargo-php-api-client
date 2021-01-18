<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\User\Objects\UserRefuseProfile;

/**
 * Полная информация по заказу, карточка заказа
 * source: order/objects/order-card-full.json
 *
 * @property string $id
 * @property int $serialId
 * @property int $statusId
 * @property int $extStatusId
 * @property string $endDate
 * @property int $duration
 * @property string $createDate
 * @property string $currencyCode
 * @property string $openPrice
 * @property string $paymentDetail
 * @property string $currentPrice
 * @property string $recommendedPrice
 * @property string $stepBid
 * @property bool $isNoPrice
 * @property string $type
 * @property int $bidCount
 * @property string $consignorId
 * @property string $carrierId
 * @property string $startDate
 * @property int $paymentTypeId
 * @property float $vatRate
 * @property int $proxyDocId
 * @property int $carrierDocId
 * @property OrderCardFullPrevCarrierDoc $prevCarrierDoc
 * @property OrderCardFullPrevGeneralPartnerDoc $prevGeneralPartnerDoc
 * @property int $consignorDocId
 * @property string $comment
 * @property TemperatureRange $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string $cargoType
 * @property int $truckTypeId
 * @property int $driverId
 * @property OrderDriver $driver
 * @property int[] $truckIds
 * @property OrderTruck $truck
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property string[] $conditions
 * @property int[] $contact
 * @property RoutePointCard[] $point
 * @property string $accessTypeId
 * @property int $contractTypeId
 * @property UserRefuseProfile $refuseProfile
 * @property UserRefuseProfile $refuseAppealProfile
 * @property bool $isRound
 * @property bool $isPin
 * @property bool $isView
 * @property bool $isLastBidMy
 * @property bool $isWasMyBid
 * @property bool $isCurrentUserHasBid
 * @property bool $isIamWinner
 * @property bool $isCarrierRefuse
 * @property bool $isConsignorRefuse
 * @property bool $isRefuseCancel
 * @property int[] $protectedBidReason
 * @property string $disabledDeadline
 * @property string $refuseReasonCode
 * @property string $refuseReasonComment
 * @property string $refuseDate
 * @property string $refuseAppeal
 * @property string $refuseAppealDate
 * @property string[] $tag
 * @property int $viewCount
 * @property int $pinCount
 * @property int $commentCount
 * @property string $externalId
 * @property string $externalIdLabel
 * @property string $kind
 * @property string $priceType
 * @property string $periodFromDate
 * @property string $periodToDate
 * @property int $bidCreatorId
 * @property int[] $carrierContactIds
 * @property int[] $generalPartnerContact
 * @property int $generalPartnerDocId
 * @property bool $isGeneralPartner
 * @property string $generalPartnerId
 * @property string $generalPartnerContractId
 * @property ModerationMessage[] $moderationMessage
 * @property bool $isRepeated
 * @property bool $isAutoModerate
 * @property int $companyBranchId
 * @property int[] $monitoringIds
 * @property bool $isProxyDateEnd
 * @property int $distance
 * @property bool $isInternational
 * @property string $qualityScoreStatusByConsignor
 * @property string $qualityScoreStatusByCarrier
 * @property bool $isQualityScoreManager
 * @property bool $isTruckDriverChanged
 * @property bool $isDocChanged
 * @property OrderDetails[] $details
 * @property ProgressItemListProgress[] $progress
 * @property OrderOffer $currentOffer
 * @property OrderOfferCarRequest $carRequest
 * @property OrderPayments[] $payments
 * @property OrderCorrectionStatus $correctionStatus
 * @property OrderTruckDriverCorrectionStatus $truckDriverCorrectionStatus
 * @property OrderAccess $access
 * @property OrderPreOrder $preOrder
 * @property string $paidInvoiceDate
 */
final class OrderCardFull extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'statusId' => ['int'],
        'extStatusId' => ['int'],
        'endDate' => ['string'],
        'duration' => ['int'],
        'createDate' => ['string'],
        'currencyCode' => ['string'],
        'openPrice' => ['string'],
        'paymentDetail' => ['string'],
        'currentPrice' => ['string'],
        'recommendedPrice' => ['string'],
        'stepBid' => ['string'],
        'isNoPrice' => ['bool'],
        'type' => ['string'],
        'bidCount' => ['int'],
        'consignorId' => ['string'],
        'carrierId' => ['string'],
        'startDate' => ['string'],
        'paymentTypeId' => ['int'],
        'vatRate' => ['float'],
        'proxyDocId' => ['int'],
        'carrierDocId' => ['int'],
        'prevCarrierDoc' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderCardFullPrevCarrierDoc'],
        'prevGeneralPartnerDoc' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderCardFullPrevGeneralPartnerDoc'],
        'consignorDocId' => ['int'],
        'comment' => ['string'],
        'temperature' => ['Cargomart\ApiClient\Entity\Order\Objects\TemperatureRange'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'cargoType' => ['string'],
        'truckTypeId' => ['int'],
        'driverId' => ['int'],
        'driver' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDriver'],
        'truckIds' => ['array', 'int'],
        'truck' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderTruck'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'conditions' => ['array', 'string'],
        'contact' => ['array', 'int'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\RoutePointCard'],
        'accessTypeId' => ['string'],
        'contractTypeId' => ['int'],
        'refuseProfile' => ['Cargomart\ApiClient\Entity\User\Objects\UserRefuseProfile'],
        'refuseAppealProfile' => ['Cargomart\ApiClient\Entity\User\Objects\UserRefuseProfile'],
        'isRound' => ['bool'],
        'isPin' => ['bool'],
        'isView' => ['bool'],
        'isLastBidMy' => ['bool'],
        'isWasMyBid' => ['bool'],
        'isCurrentUserHasBid' => ['bool'],
        'isIamWinner' => ['bool'],
        'isCarrierRefuse' => ['bool'],
        'isConsignorRefuse' => ['bool'],
        'isRefuseCancel' => ['bool'],
        'protectedBidReason' => ['array', 'int'],
        'disabledDeadline' => ['string'],
        'refuseReasonCode' => ['string'],
        'refuseReasonComment' => ['string'],
        'refuseDate' => ['string'],
        'refuseAppeal' => ['string'],
        'refuseAppealDate' => ['string'],
        'tag' => ['array', 'string'],
        'viewCount' => ['int'],
        'pinCount' => ['int'],
        'commentCount' => ['int'],
        'externalId' => ['string'],
        'externalIdLabel' => ['string'],
        'kind' => ['string'],
        'priceType' => ['string'],
        'periodFromDate' => ['string'],
        'periodToDate' => ['string'],
        'bidCreatorId' => ['int'],
        'carrierContactIds' => ['array', 'int'],
        'generalPartnerContact' => ['array', 'int'],
        'generalPartnerDocId' => ['int'],
        'isGeneralPartner' => ['bool'],
        'generalPartnerId' => ['string'],
        'generalPartnerContractId' => ['string'],
        'moderationMessage' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ModerationMessage'],
        'isRepeated' => ['bool'],
        'isAutoModerate' => ['bool'],
        'companyBranchId' => ['int'],
        'monitoringIds' => ['array', 'int'],
        'isProxyDateEnd' => ['bool'],
        'distance' => ['int'],
        'isInternational' => ['bool'],
        'qualityScoreStatusByConsignor' => ['string'],
        'qualityScoreStatusByCarrier' => ['string'],
        'isQualityScoreManager' => ['bool'],
        'isTruckDriverChanged' => ['bool'],
        'isDocChanged' => ['bool'],
        'details' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDetails'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ProgressItemListProgress'],
        'currentOffer' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderOffer'],
        'carRequest' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderOfferCarRequest'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderPayments'],
        'correctionStatus' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderCorrectionStatus'],
        'truckDriverCorrectionStatus' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderTruckDriverCorrectionStatus'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAccess'],
        'preOrder' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPreOrder'],
        'paidInvoiceDate' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'statusId' => false,
        'extStatusId' => false,
        'endDate' => false,
        'duration' => false,
        'createDate' => false,
        'currencyCode' => false,
        'openPrice' => false,
        'paymentDetail' => false,
        'currentPrice' => false,
        'recommendedPrice' => false,
        'stepBid' => false,
        'isNoPrice' => false,
        'type' => false,
        'bidCount' => false,
        'consignorId' => false,
        'carrierId' => false,
        'startDate' => false,
        'paymentTypeId' => false,
        'vatRate' => false,
        'proxyDocId' => false,
        'carrierDocId' => false,
        'prevCarrierDoc' => false,
        'prevGeneralPartnerDoc' => false,
        'consignorDocId' => false,
        'comment' => false,
        'temperature' => false,
        'loading' => false,
        'device' => false,
        'cargoType' => false,
        'truckTypeId' => false,
        'driverId' => false,
        'driver' => false,
        'truckIds' => false,
        'truck' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'conditions' => false,
        'contact' => false,
        'point' => false,
        'accessTypeId' => false,
        'contractTypeId' => false,
        'refuseProfile' => false,
        'refuseAppealProfile' => false,
        'isRound' => false,
        'isPin' => false,
        'isView' => false,
        'isLastBidMy' => false,
        'isWasMyBid' => false,
        'isCurrentUserHasBid' => false,
        'isIamWinner' => false,
        'isCarrierRefuse' => false,
        'isConsignorRefuse' => false,
        'isRefuseCancel' => false,
        'protectedBidReason' => false,
        'disabledDeadline' => false,
        'refuseReasonCode' => false,
        'refuseReasonComment' => false,
        'refuseDate' => false,
        'refuseAppeal' => false,
        'refuseAppealDate' => false,
        'tag' => false,
        'viewCount' => false,
        'pinCount' => false,
        'commentCount' => false,
        'externalId' => false,
        'externalIdLabel' => false,
        'kind' => false,
        'priceType' => false,
        'periodFromDate' => false,
        'periodToDate' => false,
        'bidCreatorId' => false,
        'carrierContactIds' => false,
        'generalPartnerContact' => false,
        'generalPartnerDocId' => false,
        'isGeneralPartner' => false,
        'generalPartnerId' => false,
        'generalPartnerContractId' => false,
        'moderationMessage' => false,
        'isRepeated' => false,
        'isAutoModerate' => false,
        'companyBranchId' => false,
        'monitoringIds' => false,
        'isProxyDateEnd' => false,
        'distance' => false,
        'isInternational' => false,
        'qualityScoreStatusByConsignor' => false,
        'qualityScoreStatusByCarrier' => false,
        'isQualityScoreManager' => false,
        'isTruckDriverChanged' => false,
        'isDocChanged' => false,
        'details' => false,
        'progress' => false,
        'currentOffer' => false,
        'carRequest' => false,
        'payments' => false,
        'correctionStatus' => false,
        'truckDriverCorrectionStatus' => false,
        'access' => false,
        'preOrder' => false,
        'paidInvoiceDate' => false,
    ];
}
