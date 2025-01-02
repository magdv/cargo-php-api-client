<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список акутальных коммерческих условий
 * source: configuration/objects/configuration-commercial-conditions.json
 *
 * @property ConfigurationCommercialConditionsInternal $internal
 * @property ConfigurationCommercialConditionsInternational $international
 */
final class ConfigurationCommercialConditions extends AbstractEntity
{
    protected static $types = [
        'internal' => ['Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationCommercialConditionsInternal'],
        'international' => [
            'Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationCommercialConditionsInternational',
        ],
    ];

    protected static $nullables = ['internal' => false, 'international' => false];
}
