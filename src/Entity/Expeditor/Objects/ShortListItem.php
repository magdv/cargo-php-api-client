<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateRange;
use Cargomart\ApiClient\Entity\Base\DateTimeRange;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorBidding;
use Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem;
use Cargomart\ApiClient\Entity\Payment\Objects\PaymentInvoiceStatus;

/**
 * Объект заказа Экспедитора
 * source: expeditor/objects/short-list-item.json
 *
 * @property string $id
 * @property int $serialId
 * @property int $status
 * @property string $customerId
 * @property DateTimeRange $searchRange
 * @property int[] $curators
 * @property Price $price
 * @property Price $carrierPrice
 * @property Price $winnerPrice
 * @property ProposalPoint[] $route
 * @property ProposalCargo $cargo
 * @property string $externalId
 * @property DateRange $periodRange
 * @property int $distance
 * @property string $truckSearchTimeEnd
 * @property ProposalCarrier $carrier
 * @property ProposalProxy $proxy
 * @property ProposalRefuse[] $refuses
 * @property OrderPatchLastItem $patch
 * @property ProposalAccess $access
 * @property string $paidExpeditorPaymentDate
 * @property string $priceStrategyType
 * @property string $biddingType
 * @property OrderDraftExpeditorBidding $bidding
 * @property int $bidCount
 * @property int $carrierAsksCount
 * @property bool $hasCarrierSign
 * @property int $roadmapEventsCount
 * @property PaymentInvoiceStatus[] $paymentInvoiceStatus
 */
final class ShortListItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'status' => ['int'],
        'customerId' => ['string'],
        'searchRange' => ['Cargomart\ApiClient\Entity\Base\DateTimeRange'],
        'curators' => ['array', 'int'],
        'price' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
        'carrierPrice' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
        'winnerPrice' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalPoint'],
        'cargo' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalCargo'],
        'externalId' => ['string'],
        'periodRange' => ['Cargomart\ApiClient\Entity\Base\DateRange'],
        'distance' => ['int'],
        'truckSearchTimeEnd' => ['string'],
        'carrier' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalCarrier'],
        'proxy' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalProxy'],
        'refuses' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalRefuse'],
        'patch' => ['Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchLastItem'],
        'access' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalAccess'],
        'paidExpeditorPaymentDate' => ['string'],
        'priceStrategyType' => ['string'],
        'biddingType' => ['string'],
        'bidding' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorBidding'],
        'bidCount' => ['int'],
        'carrierAsksCount' => ['int'],
        'hasCarrierSign' => ['bool'],
        'roadmapEventsCount' => ['int'],
        'paymentInvoiceStatus' => ['array', 'Cargomart\ApiClient\Entity\Payment\Objects\PaymentInvoiceStatus'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'status' => false,
        'customerId' => false,
        'searchRange' => false,
        'curators' => false,
        'price' => false,
        'carrierPrice' => false,
        'winnerPrice' => false,
        'route' => false,
        'cargo' => false,
        'externalId' => false,
        'periodRange' => false,
        'distance' => false,
        'truckSearchTimeEnd' => false,
        'carrier' => false,
        'proxy' => false,
        'refuses' => false,
        'patch' => false,
        'access' => false,
        'paidExpeditorPaymentDate' => false,
        'priceStrategyType' => false,
        'biddingType' => false,
        'bidding' => false,
        'bidCount' => false,
        'carrierAsksCount' => false,
        'hasCarrierSign' => false,
        'roadmapEventsCount' => false,
        'paymentInvoiceStatus' => false,
    ];
}
