<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список ЭТрН заказа
 * source: order/responses/order-ecn-list-response.json
 *
 * @property OrderEcnListResponseData $data
 */
final class OrderEcnListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderEcnListResponseData']];
    protected static $nullables = ['data' => false];
}
