<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с информацией о заказах
 * source: order/responses/truck-order-list-search-response.json
 *
 * @property MessageV2[] $message
 * @property TruckOrderListSearchResponseData $data
 */
final class TruckOrderListSearchResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\TruckOrderListSearchResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
