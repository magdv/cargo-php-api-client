<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список тэгов заказа
 * source: order/responses/order-tag-list-response.json
 *
 * @property OrderTagListResponseData $data
 */
final class OrderTagListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderTagListResponseData']];
    protected static $nullables = ['data' => false];
}
