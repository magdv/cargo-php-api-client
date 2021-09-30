<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DriverApp\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с данными по статусам установки 'приложения водителя' для одного телефона
 * source: driver-app/responses/driver-app-phone-item-response.json
 *
 * @property MessageV2[] $message
 * @property DriverAppPhoneItemResponseData $data
 */
final class DriverAppPhoneItemResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\DriverApp\Responses\DriverAppPhoneItemResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
