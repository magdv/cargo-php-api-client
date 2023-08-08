<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ со списком водителей
 * source: driver/responses/driver-list-response.json
 *
 * @property MessageV2[] $message
 * @property DriverListResponseData $data
 */
final class DriverListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Driver\Responses\DriverListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
