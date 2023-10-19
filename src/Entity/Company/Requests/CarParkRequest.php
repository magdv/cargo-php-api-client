<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Форма редактирования автопарка перевозчика
 * source: company/requests/car-park-request.json
 *
 * @property bool $isInsurance
 * @property bool $isImr
 * @property bool $isTrackingGps
 * @property CarParkRequestCars[] $cars
 */
final class CarParkRequest extends AbstractEntity
{
    protected static $types = [
        'isInsurance' => ['bool'],
        'isImr' => ['bool'],
        'isTrackingGps' => ['bool'],
        'cars' => ['array', 'Cargomart\ApiClient\Entity\Company\Requests\CarParkRequestCars'],
    ];

    protected static $nullables = ['isInsurance' => false, 'isImr' => false, 'isTrackingGps' => false, 'cars' => false];
}
