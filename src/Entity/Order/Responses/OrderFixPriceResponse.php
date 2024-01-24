<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с токеном после фиксации цены
 * source: order/responses/order-fix-price-response.json
 *
 * @property OrderFixPriceResponseData $data
 */
final class OrderFixPriceResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderFixPriceResponseData']];
    protected static $nullables = ['data' => false];
}
