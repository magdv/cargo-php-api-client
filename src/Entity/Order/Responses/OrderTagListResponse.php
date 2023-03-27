<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-tag-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список тэгов заказа
 * source: order/responses/order-tag-list-response.json
 *
 * @property MessageV2[] $message
 * @property OrderTagListResponseData $data
 */
final class OrderTagListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderTagListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
