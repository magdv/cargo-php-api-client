<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект заказа
 * source: order/objects/order-short.json
 *
 * @property string $id
 * @property int $serialId
 * @property string $currencyCode
 * @property float $vatRate
 * @property bool $isConsignorVat
 * @property int $distance
 * @property int $statusId
 * @property int $extStatusId
 * @property string $expeditorId
 */
final class OrderShort extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'currencyCode' => ['string'],
        'vatRate' => ['float'],
        'isConsignorVat' => ['bool'],
        'distance' => ['int'],
        'statusId' => ['int'],
        'extStatusId' => ['int'],
        'expeditorId' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'currencyCode' => false,
        'vatRate' => false,
        'isConsignorVat' => false,
        'distance' => false,
        'statusId' => false,
        'extStatusId' => false,
        'expeditorId' => false,
    ];
}
