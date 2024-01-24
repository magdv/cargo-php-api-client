<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Данные запроса на изменение заказа
 * source: order/responses/order-correction-response.json
 *
 * @property OrderCorrectionResponseData $data
 */
final class OrderCorrectionResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderCorrectionResponseData']];
    protected static $nullables = ['data' => false];
}
