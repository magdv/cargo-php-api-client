<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\WorkSchedule;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Время работы
 * source: base/work-schedule/working-hours.json
 *
 * @property string $opening
 * @property string $closing
 */
final class WorkingHours extends AbstractEntity
{
    protected static $types = ['opening' => ['string'], 'closing' => ['string']];
    protected static $nullables = ['opening' => false, 'closing' => false];
}
