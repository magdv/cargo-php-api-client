<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ со списком водителей
 * source: driver/responses/driver-list-response.json
 *
 * @property DriverListResponseData $data
 */
final class DriverListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Driver\Responses\DriverListResponseData']];
    protected static $nullables = ['data' => false];
}
