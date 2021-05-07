<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект заказа
 * source: order/objects/order-short-list-item.json
 *
 * @property string $id
 * @property string $draftId
 * @property int $serialId
 * @property int $statusId
 * @property int $extStatusId
 * @property string $type
 * @property string $consignorId
 * @property string $carrierId
 * @property string $startDate
 * @property string $endDate
 * @property string $createDate
 * @property string $updateDate
 * @property string $currencyCode
 * @property string $openPrice
 * @property string $currentPrice
 * @property bool $isNoPrice
 * @property float $vatRate
 * @property bool $isConsignorVat
 * @property int $proxyDocId
 * @property int $carrierDocId
 * @property string $stepBid
 * @property int $bidCount
 * @property int $truckTypeId
 * @property RoutePointShort[] $point
 * @property string $accessTypeId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property string[] $tag
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
 * @property int $commentCount
 * @property string $externalId
 * @property string $kind
 * @property string $priceType
 * @property string $periodFromDate
 * @property string $periodToDate
 * @property int $generalPartnerDocId
 * @property bool $isGeneralPartner
 * @property string $generalPartnerId
 * @property string $generalPartnerContractId
 * @property int $driverId
 * @property OrderDriver $driver
 * @property int[] $truckIds
 * @property OrderTruck $truck
 * @property bool $isRepeated
 * @property int $companyBranchId
 * @property int[] $monitoringIds
 * @property bool $isProxyDateEnd
 * @property string $qualityScoreStatusByConsignor
 * @property string $qualityScoreStatusByCarrier
 * @property bool $isTruckDriverChanged
 * @property bool $isDocChanged
 * @property ProgressItemListProgress[] $progress
 * @property int $distance
 * @property OrderOffer $currentOffer
 * @property OrderOfferCarRequest $carRequest
 * @property OrderPayments[] $payments
 * @property OrderCorrectionStatus $correctionStatus
 * @property OrderTruckDriverCorrectionStatus $truckDriverCorrectionStatus
 * @property string $paidInvoiceDate
 * @property OrderAccess $access
 * @property bool $isQualityScoreManager
 */
final class OrderShortListItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'draftId' => ['string'],
        'serialId' => ['int'],
        'statusId' => ['int'],
        'extStatusId' => ['int'],
        'type' => ['string'],
        'consignorId' => ['string'],
        'carrierId' => ['string'],
        'startDate' => ['string'],
        'endDate' => ['string'],
        'createDate' => ['string'],
        'updateDate' => ['string'],
        'currencyCode' => ['string'],
        'openPrice' => ['string'],
        'currentPrice' => ['string'],
        'isNoPrice' => ['bool'],
        'vatRate' => ['float'],
        'isConsignorVat' => ['bool'],
        'proxyDocId' => ['int'],
        'carrierDocId' => ['int'],
        'stepBid' => ['string'],
        'bidCount' => ['int'],
        'truckTypeId' => ['int'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\RoutePointShort'],
        'accessTypeId' => ['string'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'tag' => ['array', 'string'],
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
        'commentCount' => ['int'],
        'externalId' => ['string'],
        'kind' => ['string'],
        'priceType' => ['string'],
        'periodFromDate' => ['string'],
        'periodToDate' => ['string'],
        'generalPartnerDocId' => ['int'],
        'isGeneralPartner' => ['bool'],
        'generalPartnerId' => ['string'],
        'generalPartnerContractId' => ['string'],
        'driverId' => ['int'],
        'driver' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDriver'],
        'truckIds' => ['array', 'int'],
        'truck' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderTruck'],
        'isRepeated' => ['bool'],
        'companyBranchId' => ['int'],
        'monitoringIds' => ['array', 'int'],
        'isProxyDateEnd' => ['bool'],
        'qualityScoreStatusByConsignor' => ['string'],
        'qualityScoreStatusByCarrier' => ['string'],
        'isTruckDriverChanged' => ['bool'],
        'isDocChanged' => ['bool'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ProgressItemListProgress'],
        'distance' => ['int'],
        'currentOffer' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderOffer'],
        'carRequest' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderOfferCarRequest'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderPayments'],
        'correctionStatus' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderCorrectionStatus'],
        'truckDriverCorrectionStatus' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderTruckDriverCorrectionStatus'],
        'paidInvoiceDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAccess'],
        'isQualityScoreManager' => ['bool'],
    ];

    protected static $nullables = [
        'id' => false,
        'draftId' => false,
        'serialId' => false,
        'statusId' => false,
        'extStatusId' => false,
        'type' => false,
        'consignorId' => false,
        'carrierId' => false,
        'startDate' => false,
        'endDate' => false,
        'createDate' => false,
        'updateDate' => false,
        'currencyCode' => false,
        'openPrice' => false,
        'currentPrice' => false,
        'isNoPrice' => false,
        'vatRate' => false,
        'isConsignorVat' => false,
        'proxyDocId' => false,
        'carrierDocId' => false,
        'stepBid' => false,
        'bidCount' => false,
        'truckTypeId' => false,
        'point' => false,
        'accessTypeId' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'tag' => false,
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
        'commentCount' => false,
        'externalId' => false,
        'kind' => false,
        'priceType' => false,
        'periodFromDate' => false,
        'periodToDate' => false,
        'generalPartnerDocId' => false,
        'isGeneralPartner' => false,
        'generalPartnerId' => false,
        'generalPartnerContractId' => false,
        'driverId' => false,
        'driver' => false,
        'truckIds' => false,
        'truck' => false,
        'isRepeated' => false,
        'companyBranchId' => false,
        'monitoringIds' => false,
        'isProxyDateEnd' => false,
        'qualityScoreStatusByConsignor' => false,
        'qualityScoreStatusByCarrier' => false,
        'isTruckDriverChanged' => false,
        'isDocChanged' => false,
        'progress' => false,
        'distance' => false,
        'currentOffer' => false,
        'carRequest' => false,
        'payments' => false,
        'correctionStatus' => false,
        'truckDriverCorrectionStatus' => false,
        'paidInvoiceDate' => false,
        'access' => false,
        'isQualityScoreManager' => false,
    ];
}
