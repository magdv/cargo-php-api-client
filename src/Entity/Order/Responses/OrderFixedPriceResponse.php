<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с токеном после фиксации цены
 * source: order/responses/order-fix-price-response.json
 *
 * @property MessageV2[] $message
 * @property OrderFixedPriceResponseData $data
 */
final class OrderFixedPriceResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderFixedPriceResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
