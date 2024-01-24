<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с моделью водителя
 * source: driver/responses/driver-response.json
 *
 * @property DriverResponseData $data
 */
final class DriverResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Driver\Responses\DriverResponseData']];
    protected static $nullables = ['data' => false];
}
