<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeRange;
use Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem;

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
 * @property int $driverId
 * @property DateTimeRange $searchRange
 * @property string $currencyCode
 * @property string $consignorPrice
 * @property string $carrierPrice
 * @property int $truckTypeId
 * @property RoutePointShort[] $route
 * @property float $weight
 * @property int $capacity
 * @property string $externalId
 * @property string $vat
 * @property string $periodFromDate
 * @property string $periodToDate
 * @property string $truckSearchTimeEnd
 * @property OriginalDocument $originalDocument
 * @property string $carrierPackageStatus
 * @property ProposalProxy $proxy
 * @property OrderPatchLastItem $lastPatch
 * @property OrderPatchLastItem $truckDriverPatch
 * @property ProposalAccess $access
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
        'driverId' => ['int'],
        'searchRange' => ['Cargomart\ApiClient\Entity\Base\DateTimeRange'],
        'currencyCode' => ['string'],
        'consignorPrice' => ['string'],
        'carrierPrice' => ['string'],
        'truckTypeId' => ['int'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\RoutePointShort'],
        'weight' => ['float'],
        'capacity' => ['int'],
        'externalId' => ['string'],
        'vat' => ['string'],
        'periodFromDate' => ['string'],
        'periodToDate' => ['string'],
        'truckSearchTimeEnd' => ['string'],
        'originalDocument' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\OriginalDocument'],
        'carrierPackageStatus' => ['string'],
        'proxy' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalProxy'],
        'lastPatch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem'],
        'truckDriverPatch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem'],
        'access' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'hasExpeditorSign' => false,
        'serialId' => false,
        'status' => false,
        'consignorId' => false,
        'carrierId' => false,
        'truckId' => false,
        'driverId' => false,
        'searchRange' => false,
        'currencyCode' => false,
        'consignorPrice' => false,
        'carrierPrice' => false,
        'truckTypeId' => false,
        'route' => false,
        'weight' => false,
        'capacity' => false,
        'externalId' => false,
        'vat' => false,
        'periodFromDate' => false,
        'periodToDate' => false,
        'truckSearchTimeEnd' => false,
        'originalDocument' => false,
        'carrierPackageStatus' => false,
        'proxy' => false,
        'lastPatch' => false,
        'truckDriverPatch' => false,
        'access' => false,
    ];
}
