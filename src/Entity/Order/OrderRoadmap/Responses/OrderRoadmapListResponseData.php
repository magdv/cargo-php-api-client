<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderRoadmap\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderRoadmap\Objects\OrderRoadmapItem;

/**
 * Данные
 * source: order/OrderRoadmap/responses/order-roadmap-list-response.json#/properties/data
 *
 * @property OrderRoadmapItem[] $roadmap
 */
final class OrderRoadmapListResponseData extends AbstractEntity
{
    protected static $types = [
        'roadmap' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderRoadmap\Objects\OrderRoadmapItem'],
    ];

    protected static $nullables = ['roadmap' => false];
}
