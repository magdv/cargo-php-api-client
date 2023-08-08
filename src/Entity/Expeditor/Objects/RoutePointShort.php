<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule;

/**
 * Пункт маршрута
 * source: expeditor/objects/route-point-short.json
 *
 * @property int $id
 * @property string $title
 * @property int $serialId
 * @property string $localityName
 * @property string $code
 * @property string $fromDate
 * @property string $fromTime
 * @property string $toTime
 * @property bool $isAccordingToWorkSchedule
 * @property WorkSchedule $workSchedule
 */
final class RoutePointShort extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'title' => ['string'],
        'serialId' => ['int'],
        'localityName' => ['string'],
        'code' => ['string'],
        'fromDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
        'isAccordingToWorkSchedule' => ['bool'],
        'workSchedule' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule'],
    ];

    protected static $nullables = [
        'id' => false,
        'title' => false,
        'serialId' => false,
        'localityName' => false,
        'code' => false,
        'fromDate' => false,
        'fromTime' => false,
        'toTime' => false,
        'isAccordingToWorkSchedule' => false,
        'workSchedule' => false,
    ];
}
