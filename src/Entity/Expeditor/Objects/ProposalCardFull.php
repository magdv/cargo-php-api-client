<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/objects/proposal-card-full.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeRange;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDetails;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorBidding;
use Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem;

/**
 * Полная информация по заказу Экспедитора
 * source: expeditor/objects/proposal-card-full.json
 *
 * @property string $id
 * @property bool $hasExpeditorSign
 * @property string $truckSearchTimeEnd
 * @property string $winnerDate
 * @property int $serialId
 * @property string $customerId
 * @property int[] $curators
 * @property string $expeditorId
 * @property Price $price
 * @property Price $carrierPrice
 * @property Price $winnerPrice
 * @property int $status
 * @property DateTimeRange $searchRange
 * @property ProposalCargo $cargo
 * @property ProposalCarrier $carrier
 * @property ProposalPoint[] $route
 * @property ExpeditorContract $expeditorContract
 * @property OrderPatchLastItem $patch
 * @property OrderPatchLastItem $lastPatch
 * @property OrderPatchLastItem $truckDriverPatch
 * @property string $externalId
 * @property int $customerBranchId
 * @property int $distance
 * @property OrderDetails[] $details
 * @property ProposalRefuse[] $refuses
 * @property string[] $tag
 * @property float $viewCount
 * @property float $pinCount
 * @property Price $additionalConsignorPrice
 * @property Price $additionalCarrierPrice
 * @property ProposalAccess $access
 * @property ProposalProxy $proxy
 * @property string $priceStrategyType
 * @property string $biddingType
 * @property OrderDraftExpeditorBidding $bidding
 * @property int $bidCount
 * @property int $carrierAsksCount
 * @property bool $hasCarrierSign
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
        'price' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
        'carrierPrice' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
        'winnerPrice' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
        'status' => ['int'],
        'searchRange' => ['Cargomart\ApiClient\Entity\Base\DateTimeRange'],
        'cargo' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalCargo'],
        'carrier' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalCarrier'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalPoint'],
        'expeditorContract' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ExpeditorContract'],
        'patch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem'],
        'lastPatch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem'],
        'truckDriverPatch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem'],
        'externalId' => ['string'],
        'customerBranchId' => ['int'],
        'distance' => ['int'],
        'details' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDetails'],
        'refuses' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalRefuse'],
        'tag' => ['array', 'string'],
        'viewCount' => ['float'],
        'pinCount' => ['float'],
        'additionalConsignorPrice' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
        'additionalCarrierPrice' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
        'access' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalAccess'],
        'proxy' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalProxy'],
        'priceStrategyType' => ['string'],
        'biddingType' => ['string'],
        'bidding' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorBidding'],
        'bidCount' => ['int'],
        'carrierAsksCount' => ['int'],
        'hasCarrierSign' => ['bool'],
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
        'cargo' => false,
        'carrier' => false,
        'route' => false,
        'expeditorContract' => false,
        'patch' => false,
        'lastPatch' => false,
        'truckDriverPatch' => false,
        'externalId' => false,
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
    ];
}
