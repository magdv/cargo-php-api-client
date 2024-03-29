<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DriverApp\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с данными по статусам установки 'приложения водителя' для группы телефонов
 * source: driver-app/responses/driver-app-phone-list-response.json
 *
 * @property DriverAppPhoneListResponseData $data
 * @property MessageV2[] $message
 */
final class DriverAppPhoneListResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\DriverApp\Responses\DriverAppPhoneListResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
