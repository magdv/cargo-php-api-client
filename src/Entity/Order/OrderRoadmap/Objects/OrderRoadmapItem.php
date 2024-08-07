<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderRoadmap\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект роадмап
 * source: order/OrderRoadmap/objects/order-roadmap-item.json
 *
 * @property string $id
 * @property string $type
 * @property bool $isDone
 * @property bool $isCurrent
 * @property bool $isNeedAction
 * @property bool $isDynamic
 * @property string $text
 * @property int $level
 * @property RoadmapAccess $access
 */
final class OrderRoadmapItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'type' => ['string'],
        'isDone' => ['bool'],
        'isCurrent' => ['bool'],
        'isNeedAction' => ['bool'],
        'isDynamic' => ['bool'],
        'text' => ['string'],
        'level' => ['int'],
        'access' => ['Cargomart\ApiClient\Entity\Order\OrderRoadmap\Objects\RoadmapAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'type' => false,
        'isDone' => false,
        'isCurrent' => false,
        'isNeedAction' => false,
        'isDynamic' => false,
        'text' => false,
        'level' => false,
        'access' => false,
    ];
}
