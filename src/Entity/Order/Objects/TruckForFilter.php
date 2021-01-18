<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект машины для фильтра поиска по заказам
 * source: order/objects/truck-for-filter.json
 *
 * @property int $id
 * @property string $number
 * @property TruckForFilterAccess $access
 */
final class TruckForFilter extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'number' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\TruckForFilterAccess'],
    ];

    protected static $nullables = ['id' => false, 'number' => false, 'access' => false];
}
