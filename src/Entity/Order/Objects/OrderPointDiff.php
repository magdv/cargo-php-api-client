<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem;

/**
 * Объект с устаревшим пунктаом маршрута в заказе и новым значением из справочника
 * source: order/objects/order-point-diff.json
 *
 * @property int $id
 * @property StoragePointItem $oldValue
 * @property StoragePointItem $newValue
 */
final class OrderPointDiff extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'oldValue' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem'],
        'newValue' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem'],
    ];

    protected static $nullables = ['id' => false, 'oldValue' => false, 'newValue' => false];
}
