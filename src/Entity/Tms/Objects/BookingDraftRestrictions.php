<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\CoordinateRadius;

/**
 * Ограничения на создание запроса
 * source: tms/objects/booking-draft-restrictions.json
 *
 * @property string $deadline
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property CoordinateRadius $departure
 * @property CoordinateRadius $destination
 */
final class BookingDraftRestrictions extends AbstractEntity
{
    protected static $types = [
        'deadline' => ['string'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'departure' => ['Cargomart\ApiClient\Entity\Base\CoordinateRadius'],
        'destination' => ['Cargomart\ApiClient\Entity\Base\CoordinateRadius'],
    ];

    protected static $nullables = [
        'deadline' => false,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'departure' => false,
        'destination' => false,
    ];
}
