<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-roadmap-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список роадмап
 * source: order/responses/order-roadmap-list-response.json
 *
 * @property MessageV2[] $message
 * @property OrderRoadmapListResponseData $data
 */
final class OrderRoadmapListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderRoadmapListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
