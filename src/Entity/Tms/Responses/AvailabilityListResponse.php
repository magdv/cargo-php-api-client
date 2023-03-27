<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tms/responses/availability-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Успешный ответ
 * source: tms/responses/availability-list-response.json
 *
 * @property MessageV2[] $message
 * @property AvailabilityListResponseData $data
 */
final class AvailabilityListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tms\Responses\AvailabilityListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
