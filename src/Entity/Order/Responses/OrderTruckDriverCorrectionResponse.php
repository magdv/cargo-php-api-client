<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Данные запроса на изменение водителя или машины
 * source: order/responses/order-truck-driver-correction-response.json
 *
 * @property OrderTruckDriverCorrectionResponseData $data
 */
final class OrderTruckDriverCorrectionResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderTruckDriverCorrectionResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
