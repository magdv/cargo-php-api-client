<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Driver\Models\Driver;

/**
 * source: driver/responses/driver-response.json#/properties/data
 *
 * @property Driver $driver
 */
final class DriverResponseData extends AbstractEntity
{
    protected static $types = ['driver' => ['Cargomart\ApiClient\Entity\Driver\Models\Driver']];
    protected static $nullables = ['driver' => false];
}
