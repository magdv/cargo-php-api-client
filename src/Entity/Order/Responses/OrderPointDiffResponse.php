<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Дифф между точками маршрута в заказе и справочнике
 * source: order/responses/order-point-diff-response.json
 *
 * @property OrderPointDiffResponseData $data
 */
final class OrderPointDiffResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderPointDiffResponseData']];
    protected static $nullables = ['data' => false];
}
