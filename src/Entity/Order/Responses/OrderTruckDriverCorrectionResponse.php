<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-truck-driver-correction-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Данные запроса на изменение водителя или машины
 * source: order/responses/order-truck-driver-correction-response.json
 *
 * @property MessageV2[] $message
 * @property OrderTruckDriverCorrectionResponseData $data
 */
final class OrderTruckDriverCorrectionResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderTruckDriverCorrectionResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
