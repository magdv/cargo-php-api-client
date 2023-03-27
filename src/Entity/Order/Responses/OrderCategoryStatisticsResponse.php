<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-category-statistics-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Успешный ответ
 * source: order/responses/order-category-statistics-response.json
 *
 * @property MessageV2[] $message
 * @property OrderCategoryStatisticsResponseData $data
 */
final class OrderCategoryStatisticsResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderCategoryStatisticsResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
