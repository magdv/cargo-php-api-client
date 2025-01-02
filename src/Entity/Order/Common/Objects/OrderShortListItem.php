<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;
use Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ExpeditorContract;
use Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalProxy;
use Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalRefuse;
use Cargomart\ApiClient\Entity\Order\OrderCarrierAsk\Objects\CarrierAskCurrent;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OriginalDocument;
use Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem;
use Cargomart\ApiClient\Entity\Order\OrderPayment\Objects\OrderPayment;
use Cargomart\ApiClient\Entity\Payment\Objects\PaymentInvoiceStatus;

/**
 * Объект заказа
 * source: order/Common/objects/order-short-list-item.json
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
 * @property string $currentPriceWithFee
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
 * @property ProgressItemListProgress[] $progress
 * @property int $distance
 * @property OrderOfferCurrent $currentOffer
 * @property CarrierAskCurrent $currentCarrierAsk
 * @property CarrierAskCurrent $winningCarrierAsk
 * @property OrderOfferCarRequest $carRequest
 * @property OrderPayment[] $payments
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
 * @property bool $isInternational
 * @property OrderDetails[] $details
 * @property string[] $conditions
 * @property int[] $loading
 * @property string[] $device
 * @property string $cargoType
 * @property int $contractTypeId
 * @property TemperatureRange $temperature
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
        'refuses' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalRefuse'],
        'startDate' => ['string'],
        'endDate' => ['string'],
        'createDate' => ['string'],
        'updateDate' => ['string'],
        'currencyCode' => ['string'],
        'isMultiCurrency' => ['bool'],
        'openPrice' => ['string'],
        'currentPrice' => ['string'],
        'currentPriceWithFee' => ['string'],
        'isNoPrice' => ['bool'],
        'vatRate' => ['float'],
        'isConsignorVat' => ['bool'],
        'proposalProxy' => ['Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalProxy'],
        'proxyDocId' => ['int'],
        'carrierDocId' => ['int'],
        'stepBid' => ['string'],
        'bidCount' => ['int'],
        'truckTypeId' => ['int'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\RoutePointShort'],
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
        'protectedBidReasonComment' => [
            'array',
            'Cargomart\ApiClient\Entity\Order\Common\Objects\ProtectedBidReasonComment',
        ],
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
        'expeditorCarrierContract' => ['Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ExpeditorContract'],
        'driverId' => ['int'],
        'driver' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDriver'],
        'truckIds' => ['array', 'int'],
        'truck' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderTruck'],
        'isRepeated' => ['bool'],
        'companyBranchId' => ['int'],
        'monitoringIds' => ['array', 'int'],
        'isProxyDateEnd' => ['bool'],
        'patch' => ['Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem'],
        'lastPatch' => ['Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem'],
        'truckDriverPatch' => ['Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem'],
        'isTruckDriverChanged' => ['bool'],
        'isDocChanged' => ['bool'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\ProgressItemListProgress'],
        'distance' => ['int'],
        'currentOffer' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderOfferCurrent'],
        'currentCarrierAsk' => ['Cargomart\ApiClient\Entity\Order\OrderCarrierAsk\Objects\CarrierAskCurrent'],
        'winningCarrierAsk' => ['Cargomart\ApiClient\Entity\Order\OrderCarrierAsk\Objects\CarrierAskCurrent'],
        'carRequest' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderOfferCarRequest'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderPayment\Objects\OrderPayment'],
        'paidInvoiceDate' => ['string'],
        'paidExpeditorPaymentDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderAccess'],
        'originalDocument' => ['Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OriginalDocument'],
        'carrierPackageStatus' => ['string'],
        'priceStrategyType' => ['string'],
        'biddingType' => ['string'],
        'bidding' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftExpeditorBidding'],
        'carrierAsksCount' => ['int'],
        'hasCarrierSign' => ['bool'],
        'roadmapEventsCount' => ['int'],
        'paymentInvoiceStatus' => ['array', 'Cargomart\ApiClient\Entity\Payment\Objects\PaymentInvoiceStatus'],
        'isInternational' => ['bool'],
        'details' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDetails'],
        'conditions' => ['array', 'string'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'cargoType' => ['string'],
        'contractTypeId' => ['int'],
        'temperature' => ['Cargomart\ApiClient\Entity\Base\TemperatureRange'],
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
        'currentPriceWithFee' => false,
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
        'isInternational' => false,
        'details' => false,
        'conditions' => false,
        'loading' => false,
        'device' => false,
        'cargoType' => false,
        'contractTypeId' => false,
        'temperature' => false,
    ];
}
