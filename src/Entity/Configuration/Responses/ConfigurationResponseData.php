<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: configuration/responses/configuration-response.json#/properties/data
 *
 * @property string $gpContactTimetable
 * @property ConfigurationResponseDataFeatures $features
 */
final class ConfigurationResponseData extends AbstractEntity
{
    protected static $types = [
        'gpContactTimetable' => ['string'],
        'features' => ['Cargomart\ApiClient\Entity\Configuration\Responses\ConfigurationResponseDataFeatures'],
    ];

    protected static $nullables = ['gpContactTimetable' => false, 'features' => false];
}
