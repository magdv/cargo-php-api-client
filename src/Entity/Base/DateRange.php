<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/date-range.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Диапазон дат (только даты)
 * source: base/date-range.json
 *
 * @property string $from
 * @property string $to
 */
final class DateRange extends AbstractEntity
{
    protected static $types = ['from' => ['string'], 'to' => ['string']];
    protected static $nullables = ['from' => false, 'to' => false];
}
