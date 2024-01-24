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
 * Ответ с данными по статусам установки 'приложения водителя' для одного телефона
 * source: driver-app/responses/driver-app-phone-item-response.json
 *
 * @property DriverAppPhoneItemResponseData $data
 * @property MessageV2[] $message
 */
final class DriverAppPhoneItemResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\DriverApp\Responses\DriverAppPhoneItemResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
