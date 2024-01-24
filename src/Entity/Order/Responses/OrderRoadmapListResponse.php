<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список роадмап
 * source: order/responses/order-roadmap-list-response.json
 *
 * @property OrderRoadmapListResponseData $data
 */
final class OrderRoadmapListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderRoadmapListResponseData']];
    protected static $nullables = ['data' => false];
}
