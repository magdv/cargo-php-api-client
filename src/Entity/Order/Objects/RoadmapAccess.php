<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/roadmap-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к роадмап
 * source: order/objects/roadmap-access.json
 *
 * @property bool $createTypeHide
 */
final class RoadmapAccess extends AbstractEntity
{
    protected static $types = ['createTypeHide' => ['bool']];
    protected static $nullables = ['createTypeHide' => false];
}
