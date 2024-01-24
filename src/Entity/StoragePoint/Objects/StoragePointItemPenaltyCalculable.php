<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule;

/**
 * Данные склада маршрутного пункта необходимые для расчета штрафов алгоритмами ЦО
 * source: storage-point/objects/storage-point-item-penalty-calculable.json
 *
 * @property int $id
 * @property string $code
 * @property string $title
 * @property string $address
 * @property WorkSchedule $workSchedule
 */
final class StoragePointItemPenaltyCalculable extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'code' => ['string'],
        'title' => ['string'],
        'address' => ['string'],
        'workSchedule' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule'],
    ];

    protected static $nullables = [
        'id' => false,
        'code' => false,
        'title' => false,
        'address' => false,
        'workSchedule' => false,
    ];
}
