<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Информация по ЭТрН заказа
 * source: order/responses/order-ecn-response.json
 *
 * @property OrderEcnResponseData $data
 */
final class OrderEcnResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderEcnResponseData']];
    protected static $nullables = ['data' => false];
}
