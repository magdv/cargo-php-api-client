<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Расписание работы
 * source: dictionary/objects/branch-item.json#/properties/schedule
 *
 * @property string $to
 * @property string $from
 * @property string $dayOfWeek
 */
final class BranchItemSchedule extends AbstractEntity
{
    protected static $types = ['to' => ['string'], 'from' => ['string'], 'dayOfWeek' => ['string']];
    protected static $nullables = ['to' => false, 'from' => false, 'dayOfWeek' => false];
}
