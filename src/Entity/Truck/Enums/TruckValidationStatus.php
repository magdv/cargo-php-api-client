<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статус валидации данных ТС (1 - все данные валидные, 2 - не валидные данные ИНН или ВУ, 3 - Фактический перевозчик НЕ является резидентом РФ И машина зарегистрирована НЕ в РФ, 4 - Фактический перевозчик НЕ является резидентом РФ, 5 - Машина зарегистрирована НЕ в РФ, 6 - Фактический собственник машины Не является резидентом РФ.)
 * source: truck/enums/truck-validation-status.json
 */
final class TruckValidationStatus extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
