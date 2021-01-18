<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные по свободным машинам, элемент списка для сохранения в БД, приходящий от TMS
 * source: tms/objects/availability-item.json
 *
 * @property string $date
 * @property int $availableTrucks
 * @property string $price
 * @property string $currencyCode
 * @property string $carrierId
 * @property int $travelTime
 * @property int $truckType
 * @property string $orderType
 */
final class AvailabilityItem extends AbstractEntity
{
    protected static $types = [
        'date' => ['string'],
        'availableTrucks' => ['int'],
        'price' => ['string'],
        'currencyCode' => ['string'],
        'carrierId' => ['string'],
        'travelTime' => ['int'],
        'truckType' => ['int'],
        'orderType' => ['string'],
    ];

    protected static $nullables = [
        'date' => false,
        'availableTrucks' => false,
        'price' => false,
        'currencyCode' => false,
        'carrierId' => false,
        'travelTime' => false,
        'truckType' => false,
        'orderType' => false,
    ];
}
