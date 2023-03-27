<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/objects/branch-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные филиала
 * source: dictionary/objects/branch-item.json
 *
 * @property string $id
 * @property string $name
 * @property string $address
 * @property string[] $phones
 * @property string[] $emails
 * @property float $latitude
 * @property float $longitude
 * @property BranchItemScheduleItems[] $schedule
 */
final class BranchItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'name' => ['string'],
        'address' => ['string'],
        'phones' => ['array', 'string'],
        'emails' => ['array', 'string'],
        'latitude' => ['float'],
        'longitude' => ['float'],
        'schedule' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\BranchItemScheduleItems'],
    ];

    protected static $nullables = [
        'id' => false,
        'name' => false,
        'address' => false,
        'phones' => false,
        'emails' => false,
        'latitude' => false,
        'longitude' => false,
        'schedule' => false,
    ];
}
