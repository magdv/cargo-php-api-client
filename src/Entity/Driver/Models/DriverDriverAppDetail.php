<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Models;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Детализация наличия 'приложения водителя' по отдельным номерам телефонов
 * source: driver/models/driver.json#/properties/driverAppDetail
 *
 * @property string $phone
 * @property string $status
 */
final class DriverDriverAppDetail extends AbstractEntity
{
    protected static $types = ['phone' => ['string'], 'status' => ['string']];
    protected static $nullables = ['phone' => false, 'status' => false];
}
