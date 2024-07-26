<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderRoadmap\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к роадмап
 * source: order/OrderRoadmap/objects/roadmap-access.json
 *
 * @property bool $createTypeHide
 */
final class RoadmapAccess extends AbstractEntity
{
    protected static $types = ['createTypeHide' => ['bool']];
    protected static $nullables = ['createTypeHide' => false];
}
