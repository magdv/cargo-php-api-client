<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Внутрероссийские
 * source: configuration/objects/configuration-commercial-conditions.json#/properties/internal
 *
 * @property string $content
 * @property string $sign
 */
final class ConfigurationCommercialConditionsInternal extends AbstractEntity
{
    protected static $types = ['content' => ['string'], 'sign' => ['string']];
    protected static $nullables = ['content' => false, 'sign' => false];
}
