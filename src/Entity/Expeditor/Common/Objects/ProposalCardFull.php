<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateRange;
use Cargomart\ApiClient\Entity\Base\DateTimeRange;
use Cargomart\ApiClient\Entity\Base\PriceValue;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDetails;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftExpeditorBidding;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim;
use Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem;
use Cargomart\ApiClient\Entity\Payment\Objects\PaymentInvoiceStatus;

/**
 * Полная информация по заказу Экспедитора
 * source: expeditor/Common/objects/proposal-card-full.json
 *
 * @property string $id
 * @property bool $hasExpeditorSign
 * @property string $truckSearchTimeEnd
 * @property string $winnerDate
 * @property int $serialId
 * @property string $customerId
 * @property int[] $curators
 * @property string $expeditorId
 * @property PriceValue $price
 * @property PriceValue $carrierPrice
 * @property PriceValue $winnerPrice
 * @property int $status
 * @property DateTimeRange $searchRange
 * @property DateRange $periodRange
 * @property ProposalCargo $cargo
 * @property ProposalCarrier $carrier
 * @property ProposalPoint[] $route
 * @property ExpeditorContract $expeditorContract
 * @property OrderPatchLastItem $patch
 * @property OrderPatchLastItem $lastPatch
 * @property OrderPatchLastItem $truckDriverPatch
 * @property OrderDowntimeClaim $carrierDowntimeClaim
 * @property OrderDowntimeClaim $expeditorDowntimeClaim
 * @property string $externalId
 * @property string $externalIdLabel
 * @property int $customerBranchId
 * @property int $distance
 * @property OrderDetails[] $details
 * @property ProposalRefuse[] $refuses
 * @property string[] $tag
 * @property float $viewCount
 * @property float $pinCount
 * @property PriceValue $additionalConsignorPrice
 * @property PriceValue $additionalCarrierPrice
 * @property ProposalAccess $access
 * @property ProposalProxy $proxy
 * @property string $priceStrategyType
 * @property string $biddingType
 * @property OrderDraftExpeditorBidding $bidding
 * @property int $bidCount
 * @property int $carrierAsksCount
 * @property bool $hasCarrierSign
 * @property PaymentInvoiceStatus[] $paymentInvoiceStatus
 * @property int $roadmapEventsCount
 */
final class ProposalCardFull extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'hasExpeditorSign' => ['bool'],
        'truckSearchTimeEnd' => ['string'],
        'winnerDate' => ['string'],
        'serialId' => ['int'],
        'customerId' => ['string'],
        'curators' => ['array', 'int'],
        'expeditorId' => ['string'],
        'price' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
        'carrierPrice' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
        'winnerPrice' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
        'status' => ['int'],
        'searchRange' => ['Cargomart\ApiClient\Entity\Base\DateTimeRange'],
        'periodRange' => ['Cargomart\ApiClient\Entity\Base\DateRange'],
        'cargo' => ['Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalCargo'],
        'carrier' => ['Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalCarrier'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalPoint'],
        'expeditorContract' => ['Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ExpeditorContract'],
        'patch' => ['Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem'],
        'lastPatch' => ['Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem'],
        'truckDriverPatch' => ['Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem'],
        'carrierDowntimeClaim' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim'],
        'expeditorDowntimeClaim' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim'],
        'externalId' => ['string'],
        'externalIdLabel' => ['string'],
        'customerBranchId' => ['int'],
        'distance' => ['int'],
        'details' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDetails'],
        'refuses' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalRefuse'],
        'tag' => ['array', 'string'],
        'viewCount' => ['float'],
        'pinCount' => ['float'],
        'additionalConsignorPrice' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
        'additionalCarrierPrice' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
        'access' => ['Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalAccess'],
        'proxy' => ['Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalProxy'],
        'priceStrategyType' => ['string'],
        'biddingType' => ['string'],
        'bidding' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftExpeditorBidding'],
        'bidCount' => ['int'],
        'carrierAsksCount' => ['int'],
        'hasCarrierSign' => ['bool'],
        'paymentInvoiceStatus' => ['array', 'Cargomart\ApiClient\Entity\Payment\Objects\PaymentInvoiceStatus'],
        'roadmapEventsCount' => ['int'],
    ];

    protected static $nullables = [
        'id' => false,
        'hasExpeditorSign' => false,
        'truckSearchTimeEnd' => false,
        'winnerDate' => false,
        'serialId' => false,
        'customerId' => false,
        'curators' => false,
        'expeditorId' => false,
        'price' => false,
        'carrierPrice' => false,
        'winnerPrice' => false,
        'status' => false,
        'searchRange' => false,
        'periodRange' => false,
        'cargo' => false,
        'carrier' => false,
        'route' => false,
        'expeditorContract' => false,
        'patch' => false,
        'lastPatch' => false,
        'truckDriverPatch' => false,
        'carrierDowntimeClaim' => false,
        'expeditorDowntimeClaim' => false,
        'externalId' => false,
        'externalIdLabel' => false,
        'customerBranchId' => false,
        'distance' => false,
        'details' => false,
        'refuses' => false,
        'tag' => false,
        'viewCount' => false,
        'pinCount' => false,
        'additionalConsignorPrice' => false,
        'additionalCarrierPrice' => false,
        'access' => false,
        'proxy' => false,
        'priceStrategyType' => false,
        'biddingType' => false,
        'bidding' => false,
        'bidCount' => false,
        'carrierAsksCount' => false,
        'hasCarrierSign' => false,
        'paymentInvoiceStatus' => false,
        'roadmapEventsCount' => false,
    ];
}
