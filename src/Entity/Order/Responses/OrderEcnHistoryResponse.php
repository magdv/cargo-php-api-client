<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * История ЭТрН заказа
 * source: order/responses/order-ecn-history-response.json
 *
 * @property OrderEcnHistoryResponseData $data
 */
final class OrderEcnHistoryResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderEcnHistoryResponseData']];
    protected static $nullables = ['data' => false];
}
