<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Успешный ответ
 * source: order/responses/order-category-statistics-response.json
 *
 * @property OrderCategoryStatisticsResponseData $data
 */
final class OrderCategoryStatisticsResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderCategoryStatisticsResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
