<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/progress-item-list.json#/items
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: order/objects/progress-item-list.json#/items
 *
 * @property string $id
 * @property string $name
 * @property int $value
 */
final class ProgressItem extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'name' => ['string'], 'value' => ['int']];
    protected static $nullables = ['id' => false, 'name' => false, 'value' => false];
}
