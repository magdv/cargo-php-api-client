<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ExpeditorContract;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalProxy;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalRecommendation;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalRefuse;
use Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract;
use Cargomart\ApiClient\Entity\Order\ExpeditorOffer\Objects\ExpeditorOfferCarrierCurrent;
use Cargomart\ApiClient\Entity\Order\OrderCarrierAsk\Objects\CarrierAskCurrent;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OriginalDocument;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim;
use Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem;
use Cargomart\ApiClient\Entity\Order\OrderPayment\Objects\OrderPayment;
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
 * @property bool $isMultiCurrency
 * @property string $openPrice
 * @property string $paymentDetail
 * @property string $currentPrice
 * @property string $currentPriceWithFee
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
 * @property ProposalProxy $proposalProxy
 * @property int $carrierDocId
 * @property OrderPrevDoc $prevCarrierDoc
 * @property string $vat
 * @property string $vatLessPrice
 * @property OrderPrevDoc $prevGeneralPartnerDoc
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
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property string[] $conditions
 * @property int[] $contact
 * @property OrderRoutePoint[] $routePoint
 * @property RoutePointCard[] $point
 * @property string $accessTypeId
 * @property string[] $accessClient
 * @property int $contractTypeId
 * @property UserRefuseProfile $refuseProfile
 * @property UserRefuseProfile $refuseAppealProfile
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
 * @property bool $isHideRouteAddresses
 * @property int[] $protectedBidReason
 * @property ProtectedBidReasonComment[] $protectedBidReasonComment
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
 * @property int[] $consignorContactIds
 * @property string $expeditorId
 * @property string $truckSearchTimeEnd
 * @property ProposalRefuse[] $refuses
 * @property ProposalRecommendation[] $recommendations
 * @property ExpeditorOfferCarrierCurrent $currentExpeditorCarrierOffer
 * @property CarrierAskCurrent $currentCarrierAsk
 * @property CarrierAskCurrent $winningCarrierAsk
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
 * @property bool $isTruckDriverChanged
 * @property bool $isDocChanged
 * @property OrderDetails[] $details
 * @property ProgressItemListProgress[] $progress
 * @property OrderOfferCurrent $currentOffer
 * @property OrderOfferCarRequest $carRequest
 * @property OrderPayment[] $payments
 * @property OrderAccess $access
 * @property string $paidInvoiceDate
 * @property string $paidExpeditorPaymentDate
 * @property string $carrierPackageId
 * @property string $carrierPackageStatus
 * @property string $carrierPaymentType
 * @property OrderBanking $bankingDetails
 * @property OriginalDocument $originalDocument
 * @property OrderPatchLastItem $patch
 * @property OrderPatchLastItem $lastPatch
 * @property OrderPatchLastItem $truckDriverPatch
 * @property OrderDowntimeClaim $carrierDowntimeClaim
 * @property ExpeditorContract $expeditorConsignorContract
 * @property ExpeditorContract $expeditorCarrierContract
 * @property GeneralPartnerContract $gpCarrierContract
 * @property string $priceStrategyType
 * @property string $biddingType
 * @property OrderDraftExpeditorBidding $bidding
 * @property bool $hasCarrierSign
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
        'isMultiCurrency' => ['bool'],
        'openPrice' => ['string'],
        'paymentDetail' => ['string'],
        'currentPrice' => ['string'],
        'currentPriceWithFee' => ['string'],
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
        'proposalProxy' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalProxy'],
        'carrierDocId' => ['int'],
        'prevCarrierDoc' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPrevDoc'],
        'vat' => ['string'],
        'vatLessPrice' => ['string'],
        'prevGeneralPartnerDoc' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPrevDoc'],
        'consignorDocId' => ['int'],
        'comment' => ['string'],
        'temperature' => ['Cargomart\ApiClient\Entity\Base\TemperatureRange'],
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
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'conditions' => ['array', 'string'],
        'contact' => ['array', 'int'],
        'routePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderRoutePoint'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\RoutePointCard'],
        'accessTypeId' => ['string'],
        'accessClient' => ['array', 'string'],
        'contractTypeId' => ['int'],
        'refuseProfile' => ['Cargomart\ApiClient\Entity\User\Objects\UserRefuseProfile'],
        'refuseAppealProfile' => ['Cargomart\ApiClient\Entity\User\Objects\UserRefuseProfile'],
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
        'isHideRouteAddresses' => ['bool'],
        'protectedBidReason' => ['array', 'int'],
        'protectedBidReasonComment' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ProtectedBidReasonComment'],
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
        'consignorContactIds' => ['array', 'int'],
        'expeditorId' => ['string'],
        'truckSearchTimeEnd' => ['string'],
        'refuses' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalRefuse'],
        'recommendations' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalRecommendation'],
        'currentExpeditorCarrierOffer' => [
            'Cargomart\ApiClient\Entity\Order\ExpeditorOffer\Objects\ExpeditorOfferCarrierCurrent',
        ],
        'currentCarrierAsk' => ['Cargomart\ApiClient\Entity\Order\OrderCarrierAsk\Objects\CarrierAskCurrent'],
        'winningCarrierAsk' => ['Cargomart\ApiClient\Entity\Order\OrderCarrierAsk\Objects\CarrierAskCurrent'],
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
        'isTruckDriverChanged' => ['bool'],
        'isDocChanged' => ['bool'],
        'details' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDetails'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ProgressItemListProgress'],
        'currentOffer' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderOfferCurrent'],
        'carRequest' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderOfferCarRequest'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderPayment\Objects\OrderPayment'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAccess'],
        'paidInvoiceDate' => ['string'],
        'paidExpeditorPaymentDate' => ['string'],
        'carrierPackageId' => ['string'],
        'carrierPackageStatus' => ['string'],
        'carrierPaymentType' => ['string'],
        'bankingDetails' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderBanking'],
        'originalDocument' => ['Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OriginalDocument'],
        'patch' => ['Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem'],
        'lastPatch' => ['Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem'],
        'truckDriverPatch' => ['Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem'],
        'carrierDowntimeClaim' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim'],
        'expeditorConsignorContract' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ExpeditorContract'],
        'expeditorCarrierContract' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ExpeditorContract'],
        'gpCarrierContract' => ['Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract'],
        'priceStrategyType' => ['string'],
        'biddingType' => ['string'],
        'bidding' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorBidding'],
        'hasCarrierSign' => ['bool'],
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
        'isMultiCurrency' => false,
        'openPrice' => false,
        'paymentDetail' => false,
        'currentPrice' => false,
        'currentPriceWithFee' => false,
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
        'proposalProxy' => false,
        'carrierDocId' => false,
        'prevCarrierDoc' => false,
        'vat' => false,
        'vatLessPrice' => false,
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
        'loadWeight' => false,
        'loadCapacity' => false,
        'conditions' => false,
        'contact' => false,
        'routePoint' => false,
        'point' => false,
        'accessTypeId' => false,
        'accessClient' => false,
        'contractTypeId' => false,
        'refuseProfile' => false,
        'refuseAppealProfile' => false,
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
        'isHideRouteAddresses' => false,
        'protectedBidReason' => false,
        'protectedBidReasonComment' => false,
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
        'consignorContactIds' => false,
        'expeditorId' => false,
        'truckSearchTimeEnd' => false,
        'refuses' => false,
        'recommendations' => false,
        'currentExpeditorCarrierOffer' => false,
        'currentCarrierAsk' => false,
        'winningCarrierAsk' => false,
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
        'isTruckDriverChanged' => false,
        'isDocChanged' => false,
        'details' => false,
        'progress' => false,
        'currentOffer' => false,
        'carRequest' => false,
        'payments' => false,
        'access' => false,
        'paidInvoiceDate' => false,
        'paidExpeditorPaymentDate' => false,
        'carrierPackageId' => false,
        'carrierPackageStatus' => false,
        'carrierPaymentType' => false,
        'bankingDetails' => false,
        'originalDocument' => false,
        'patch' => false,
        'lastPatch' => false,
        'truckDriverPatch' => false,
        'carrierDowntimeClaim' => false,
        'expeditorConsignorContract' => false,
        'expeditorCarrierContract' => false,
        'gpCarrierContract' => false,
        'priceStrategyType' => false,
        'biddingType' => false,
        'bidding' => false,
        'hasCarrierSign' => false,
    ];
}
