<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект заказа малого перевозчика
 * source: order/objects/small-carrier-order.json
 *
 * @property string $id
 * @property int $serialId
 * @property string $currencyCode
 * @property string $currentPrice
 * @property float $vatRate
 * @property string $vat
 * @property string $vatLessPrice
 * @property bool $isConsignorVat
 * @property int $distance
 * @property SmallCarrierRoutePoint[] $point
 * @property int $statusId
 * @property int $extStatusId
 * @property OrderAccess $access
 */
final class SmallCarrierOrder extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'currencyCode' => ['string'],
        'currentPrice' => ['string'],
        'vatRate' => ['float'],
        'vat' => ['string'],
        'vatLessPrice' => ['string'],
        'isConsignorVat' => ['bool'],
        'distance' => ['int'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\SmallCarrierRoutePoint'],
        'statusId' => ['int'],
        'extStatusId' => ['int'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'currencyCode' => false,
        'currentPrice' => false,
        'vatRate' => false,
        'vat' => false,
        'vatLessPrice' => false,
        'isConsignorVat' => false,
        'distance' => false,
        'point' => false,
        'statusId' => false,
        'extStatusId' => false,
        'access' => false,
    ];
}
