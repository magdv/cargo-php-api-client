<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список типов цен заказа
 * source: order/responses/order-price-type-response.json
 *
 * @property MessageV2[] $message
 * @property OrderPriceTypeResponseData $data
 */
final class OrderPriceTypeResponse extends AbstractEntity
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderPriceTypeResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
