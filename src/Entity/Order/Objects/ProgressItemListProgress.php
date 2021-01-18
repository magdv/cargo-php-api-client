<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Элемент прогресса
 * source: order/objects/progress-item-list.json#/properties/progress
 *
 * @property string $id
 * @property string $name
 * @property int $value
 */
final class ProgressItemListProgress extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'name' => ['string'], 'value' => ['int']];
    protected static $nullables = ['id' => false, 'name' => false, 'value' => false];
}
