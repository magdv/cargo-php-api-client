<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem;

/**
 * Данные маршрутного пункта
 * source: expeditor/objects/proposal-point.json
 *
 * @property int $id
 * @property StoragePointItem $storage
 * @property CargoOwner $cargoOwner
 * @property string $type
 * @property string $additionalInfo
 * @property string $fromDate
 * @property string $fromTime
 * @property string $toTime
 * @property bool $isAccordingToWorkSchedule
 */
final class ProposalPoint extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'storage' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem'],
        'cargoOwner' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\CargoOwner'],
        'type' => ['string'],
        'additionalInfo' => ['string'],
        'fromDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
        'isAccordingToWorkSchedule' => ['bool'],
    ];

    protected static $nullables = [
        'id' => false,
        'storage' => false,
        'cargoOwner' => false,
        'type' => false,
        'additionalInfo' => false,
        'fromDate' => false,
        'fromTime' => false,
        'toTime' => false,
        'isAccordingToWorkSchedule' => false,
    ];
}
