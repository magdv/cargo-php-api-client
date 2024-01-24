<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список причин для отказа от заказа
 * source: order/responses/order-refuse-reasons-response.json
 *
 * @property OrderRefuseReasonsResponseData $data
 */
final class OrderRefuseReasonsResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderRefuseReasonsResponseData']];
    protected static $nullables = ['data' => false];
}
