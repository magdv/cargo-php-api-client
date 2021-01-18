<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Доступная функциональность
 * source: configuration/responses/configuration-response.json#/properties/data#/properties/features
 *
 * @property bool $smallCarrier
 */
final class ConfigurationResponseDataFeatures extends AbstractEntity
{
    protected static $types = ['smallCarrier' => ['bool']];
    protected static $nullables = ['smallCarrier' => false];
}
