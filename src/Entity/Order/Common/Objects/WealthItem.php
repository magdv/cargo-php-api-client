<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект списка материальных ценностей
 * source: order/Common/objects/wealth-item.json
 *
 * @property string $name
 * @property string $unit
 * @property string $volume
 */
final class WealthItem extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'unit' => ['string'], 'volume' => ['string']];
    protected static $nullables = ['name' => false, 'unit' => false, 'volume' => false];
}
