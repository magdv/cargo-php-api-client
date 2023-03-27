<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-short-list-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ExpeditorContract;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalProxy;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalRefuse;
use Cargomart\ApiClient\Entity\Order\Enums\OrderTruckDriverCorrectionStatus;
use Cargomart\ApiClient\Entity\Payment\Objects\PaymentInvoiceStatus;

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
 * @property string $expeditorId
 * @property string $truckSearchTimeEnd
 * @property ProposalRefuse[] $refuses
 * @property string $startDate
 * @property string $endDate
 * @property string $createDate
 * @property string $updateDate
 * @property string $currencyCode
 * @property bool $isMultiCurrency
 * @property string $openPrice
 * @property string $currentPrice
 * @property bool $isNoPrice
 * @property float $vatRate
 * @property bool $isConsignorVat
 * @property ProposalProxy $proposalProxy
 * @property int $proxyDocId
 * @property int $carrierDocId
 * @property string $stepBid
 * @property int $bidCount
 * @property int $truckTypeId
 * @property RoutePointShort[] $point
 * @property string $accessTypeId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property string[] $tag
 * @property bool $isAutoModerate
 * @property bool $isArchived
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
 * @property ProtectedBidReasonComment[] $protectedBidReasonComment
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
 * @property ExpeditorContract $expeditorCarrierContract
 * @property int $driverId
 * @property OrderDriver $driver
 * @property int[] $truckIds
 * @property OrderTruck $truck
 * @property bool $isRepeated
 * @property int $companyBranchId
 * @property int[] $monitoringIds
 * @property bool $isProxyDateEnd
 * @property OrderPatchLastItem $patch
 * @property OrderPatchLastItem $lastPatch
 * @property OrderPatchLastItem $truckDriverPatch
 * @property bool $isTruckDriverChanged
 * @property bool $isDocChanged
 * @property ProgressItem[] $progress
 * @property int $distance
 * @property OrderOfferCurrent $currentOffer
 * @property CarrierAskCurrent $currentCarrierAsk
 * @property CarrierAskCurrent $winningCarrierAsk
 * @property OrderOfferCarRequest $carRequest
 * @property OrderPayments[] $payments
 * @property OrderCorrectionStatus $correctionStatus
 * @property OrderTruckDriverCorrectionStatus $truckDriverCorrectionStatus
 * @property string $paidInvoiceDate
 * @property string $paidExpeditorPaymentDate
 * @property OrderAccess $access
 * @property OriginalDocument $originalDocument
 * @property string $carrierPackageStatus
 * @property string $priceStrategyType
 * @property string $biddingType
 * @property OrderDraftExpeditorBidding $bidding
 * @property int $carrierAsksCount
 * @property bool $hasCarrierSign
 * @property int $roadmapEventsCount
 * @property PaymentInvoiceStatus[] $paymentInvoiceStatus
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
        'expeditorId' => ['string'],
        'truckSearchTimeEnd' => ['string'],
        'refuses' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalRefuse'],
        'startDate' => ['string'],
        'endDate' => ['string'],
        'createDate' => ['string'],
        'updateDate' => ['string'],
        'currencyCode' => ['string'],
        'isMultiCurrency' => ['bool'],
        'openPrice' => ['string'],
        'currentPrice' => ['string'],
        'isNoPrice' => ['bool'],
        'vatRate' => ['float'],
        'isConsignorVat' => ['bool'],
        'proposalProxy' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalProxy'],
        'proxyDocId' => ['int'],
        'carrierDocId' => ['int'],
        'stepBid' => ['string'],
        'bidCount' => ['int'],
        'truckTypeId' => ['int'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\RoutePointShort'],
        'accessTypeId' => ['string'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'tag' => ['array', 'string'],
        'isAutoModerate' => ['bool'],
        'isArchived' => ['bool'],
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
        'protectedBidReasonComment' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ProtectedBidReasonComment'],
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
        'expeditorCarrierContract' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ExpeditorContract'],
        'driverId' => ['int'],
        'driver' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDriver'],
        'truckIds' => ['array', 'int'],
        'truck' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderTruck'],
        'isRepeated' => ['bool'],
        'companyBranchId' => ['int'],
        'monitoringIds' => ['array', 'int'],
        'isProxyDateEnd' => ['bool'],
        'patch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem'],
        'lastPatch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem'],
        'truckDriverPatch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem'],
        'isTruckDriverChanged' => ['bool'],
        'isDocChanged' => ['bool'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ProgressItem'],
        'distance' => ['int'],
        'currentOffer' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderOfferCurrent'],
        'currentCarrierAsk' => ['Cargomart\ApiClient\Entity\Order\Objects\CarrierAskCurrent'],
        'winningCarrierAsk' => ['Cargomart\ApiClient\Entity\Order\Objects\CarrierAskCurrent'],
        'carRequest' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderOfferCarRequest'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderPayments'],
        'correctionStatus' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderCorrectionStatus'],
        'truckDriverCorrectionStatus' => ['Cargomart\ApiClient\Entity\Order\Enums\OrderTruckDriverCorrectionStatus'],
        'paidInvoiceDate' => ['string'],
        'paidExpeditorPaymentDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAccess'],
        'originalDocument' => ['Cargomart\ApiClient\Entity\Order\Objects\OriginalDocument'],
        'carrierPackageStatus' => ['string'],
        'priceStrategyType' => ['string'],
        'biddingType' => ['string'],
        'bidding' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorBidding'],
        'carrierAsksCount' => ['int'],
        'hasCarrierSign' => ['bool'],
        'roadmapEventsCount' => ['int'],
        'paymentInvoiceStatus' => ['array', 'Cargomart\ApiClient\Entity\Payment\Objects\PaymentInvoiceStatus'],
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
        'expeditorId' => false,
        'truckSearchTimeEnd' => false,
        'refuses' => false,
        'startDate' => false,
        'endDate' => false,
        'createDate' => false,
        'updateDate' => false,
        'currencyCode' => false,
        'isMultiCurrency' => false,
        'openPrice' => false,
        'currentPrice' => false,
        'isNoPrice' => false,
        'vatRate' => false,
        'isConsignorVat' => false,
        'proposalProxy' => false,
        'proxyDocId' => false,
        'carrierDocId' => false,
        'stepBid' => false,
        'bidCount' => false,
        'truckTypeId' => false,
        'point' => false,
        'accessTypeId' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'tag' => false,
        'isAutoModerate' => false,
        'isArchived' => false,
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
        'protectedBidReasonComment' => false,
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
        'expeditorCarrierContract' => false,
        'driverId' => false,
        'driver' => false,
        'truckIds' => false,
        'truck' => false,
        'isRepeated' => false,
        'companyBranchId' => false,
        'monitoringIds' => false,
        'isProxyDateEnd' => false,
        'patch' => false,
        'lastPatch' => false,
        'truckDriverPatch' => false,
        'isTruckDriverChanged' => false,
        'isDocChanged' => false,
        'progress' => false,
        'distance' => false,
        'currentOffer' => false,
        'currentCarrierAsk' => false,
        'winningCarrierAsk' => false,
        'carRequest' => false,
        'payments' => false,
        'correctionStatus' => false,
        'truckDriverCorrectionStatus' => false,
        'paidInvoiceDate' => false,
        'paidExpeditorPaymentDate' => false,
        'access' => false,
        'originalDocument' => false,
        'carrierPackageStatus' => false,
        'priceStrategyType' => false,
        'biddingType' => false,
        'bidding' => false,
        'carrierAsksCount' => false,
        'hasCarrierSign' => false,
        'roadmapEventsCount' => false,
        'paymentInvoiceStatus' => false,
    ];
}
