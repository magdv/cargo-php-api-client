<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItemDiff;

/**
 * Объект с устаревшим пунктаом маршрута в заказе и новым значением из справочника
 * source: order/objects/order-point-diff.json
 *
 * @property int $id
 * @property StoragePointItemDiff $oldValue
 * @property StoragePointItemDiff $newValue
 */
final class OrderPointDiff extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'oldValue' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItemDiff'],
        'newValue' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItemDiff'],
    ];

    protected static $nullables = ['id' => false, 'oldValue' => false, 'newValue' => false];
}
