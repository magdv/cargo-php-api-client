<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статус валидации данных водителя (0 - undefined, 1 - все данные валидные, 10 - не валидные данные паспорта, 11 не валидные данные телефона, 12 не валидные данные паспорта и телефона, 13 не валидные данные ИНН или ВУ)
 * source: driver/enums/driver-validation-status.json
 */
final class DriverValidationStatus extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
