<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeRange;

/**
 * Объект заказа Экспедитора
 * source: expeditor/objects/short-list-item.json
 *
 * @property string $id
 * @property int $serialId
 * @property int $status
 * @property string $consignorId
 * @property string $carrierId
 * @property DateTimeRange $searchRange
 * @property string $currencyCode
 * @property string $consignorPrice
 * @property string $carrierPrice
 * @property int $truckTypeId
 * @property RoutePointShort[] $route
 * @property float $weight
 * @property int $capacity
 * @property string $externalId
 * @property string $periodFromDate
 * @property string $periodToDate
 * @property ProposalProxy $proxy
 * @property ProposalAccess $access
 */
final class ShortListItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'status' => ['int'],
        'consignorId' => ['string'],
        'carrierId' => ['string'],
        'searchRange' => ['Cargomart\ApiClient\Entity\Base\DateTimeRange'],
        'currencyCode' => ['string'],
        'consignorPrice' => ['string'],
        'carrierPrice' => ['string'],
        'truckTypeId' => ['int'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\RoutePointShort'],
        'weight' => ['float'],
        'capacity' => ['int'],
        'externalId' => ['string'],
        'periodFromDate' => ['string'],
        'periodToDate' => ['string'],
        'proxy' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalProxy'],
        'access' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'status' => false,
        'consignorId' => false,
        'carrierId' => false,
        'searchRange' => false,
        'currencyCode' => false,
        'consignorPrice' => false,
        'carrierPrice' => false,
        'truckTypeId' => false,
        'route' => false,
        'weight' => false,
        'capacity' => false,
        'externalId' => false,
        'periodFromDate' => false,
        'periodToDate' => false,
        'proxy' => false,
        'access' => false,
    ];
}
