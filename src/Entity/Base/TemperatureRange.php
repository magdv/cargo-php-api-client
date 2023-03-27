<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/temperature-range.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Диапазон температуры
 * source: base/temperature-range.json
 *
 * @property int $from
 * @property int $to
 */
final class TemperatureRange extends AbstractEntity
{
    protected static $types = ['from' => ['int'], 'to' => ['int']];
    protected static $nullables = ['from' => false, 'to' => false];
}
