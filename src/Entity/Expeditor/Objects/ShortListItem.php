<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/objects/short-list-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeRange;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorBidding;
use Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem;
use Cargomart\ApiClient\Entity\Payment\Objects\PaymentInvoiceStatus;

/**
 * Объект заказа Экспедитора
 * source: expeditor/objects/short-list-item.json
 *
 * @property string $id
 * @property bool $hasExpeditorSign
 * @property int $serialId
 * @property int $status
 * @property string $consignorId
 * @property string $carrierId
 * @property int $truckId
 * @property ProposalTruck $truck
 * @property int $driverId
 * @property ProposalDriver $driver
 * @property DateTimeRange $searchRange
 * @property string $currencyCode
 * @property string $consignorPrice
 * @property string $carrierPrice
 * @property Price $winnerPrice
 * @property int $truckTypeId
 * @property RoutePointShort[] $route
 * @property float $weight
 * @property int $capacity
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property string $externalId
 * @property string $vat
 * @property string $periodFromDate
 * @property string $periodToDate
 * @property int $distance
 * @property string $truckSearchTimeEnd
 * @property OriginalDocument $originalDocument
 * @property string $carrierPackageStatus
 * @property ProposalProxy $proxy
 * @property ProposalRefuse[] $refuses
 * @property OrderPatchLastItem $patch
 * @property OrderPatchLastItem $lastPatch
 * @property OrderPatchLastItem $truckDriverPatch
 * @property ProposalAccess $access
 * @property string $paidExpeditorPaymentDate
 * @property ProposalBankingDetails $carrierBankingDetails
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
        'hasExpeditorSign' => ['bool'],
        'serialId' => ['int'],
        'status' => ['int'],
        'consignorId' => ['string'],
        'carrierId' => ['string'],
        'truckId' => ['int'],
        'truck' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalTruck'],
        'driverId' => ['int'],
        'driver' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalDriver'],
        'searchRange' => ['Cargomart\ApiClient\Entity\Base\DateTimeRange'],
        'currencyCode' => ['string'],
        'consignorPrice' => ['string'],
        'carrierPrice' => ['string'],
        'winnerPrice' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
        'truckTypeId' => ['int'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\RoutePointShort'],
        'weight' => ['float'],
        'capacity' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'externalId' => ['string'],
        'vat' => ['string'],
        'periodFromDate' => ['string'],
        'periodToDate' => ['string'],
        'distance' => ['int'],
        'truckSearchTimeEnd' => ['string'],
        'originalDocument' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\OriginalDocument'],
        'carrierPackageStatus' => ['string'],
        'proxy' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalProxy'],
        'refuses' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalRefuse'],
        'patch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem'],
        'lastPatch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem'],
        'truckDriverPatch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem'],
        'access' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalAccess'],
        'paidExpeditorPaymentDate' => ['string'],
        'carrierBankingDetails' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalBankingDetails'],
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
        'hasExpeditorSign' => false,
        'serialId' => false,
        'status' => false,
        'consignorId' => false,
        'carrierId' => false,
        'truckId' => false,
        'truck' => false,
        'driverId' => false,
        'driver' => false,
        'searchRange' => false,
        'currencyCode' => false,
        'consignorPrice' => false,
        'carrierPrice' => false,
        'winnerPrice' => false,
        'truckTypeId' => false,
        'route' => false,
        'weight' => false,
        'capacity' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'externalId' => false,
        'vat' => false,
        'periodFromDate' => false,
        'periodToDate' => false,
        'distance' => false,
        'truckSearchTimeEnd' => false,
        'originalDocument' => false,
        'carrierPackageStatus' => false,
        'proxy' => false,
        'refuses' => false,
        'patch' => false,
        'lastPatch' => false,
        'truckDriverPatch' => false,
        'access' => false,
        'paidExpeditorPaymentDate' => false,
        'carrierBankingDetails' => false,
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
