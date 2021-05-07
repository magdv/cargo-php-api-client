<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationFeatures;
use Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationPermissions;

/**
 * source: configuration/responses/configuration-response.json#/properties/data
 *
 * @property string $gpContactTimetable
 * @property ConfigurationFeatures $features
 * @property ConfigurationPermissions $permissions
 */
final class ConfigurationResponseData extends AbstractEntity
{
    protected static $types = [
        'gpContactTimetable' => ['string'],
        'features' => ['Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationFeatures'],
        'permissions' => ['Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationPermissions'],
    ];

    protected static $nullables = ['gpContactTimetable' => false, 'features' => false, 'permissions' => false];
}
