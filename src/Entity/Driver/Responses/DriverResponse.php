<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: driver/responses/driver-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с моделью водителя
 * source: driver/responses/driver-response.json
 *
 * @property MessageV2[] $message
 * @property DriverResponseData $data
 */
final class DriverResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Driver\Responses\DriverResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
