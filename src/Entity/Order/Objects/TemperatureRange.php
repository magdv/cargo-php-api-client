<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Температурный режим
 * source: order/objects/temperature-range.json
 *
 * @property int $from
 * @property int $to
 */
final class TemperatureRange extends AbstractEntity
{
    protected static $types = ['from' => ['int'], 'to' => ['int']];
    protected static $nullables = ['from' => false, 'to' => false];
}
