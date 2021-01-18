<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Заявка резервирование - ограничения
 * source: tms/objects/booking-draft-access.json
 *
 * @property bool $view
 * @property bool $delete
 * @property bool $createPublish
 * @property bool $abort
 */
final class BookingDraftAccess extends AbstractEntity
{
    protected static $types = ['view' => ['bool'], 'delete' => ['bool'], 'createPublish' => ['bool'], 'abort' => ['bool']];
    protected static $nullables = ['view' => false, 'delete' => false, 'createPublish' => false, 'abort' => false];
}
