<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/route-point-contact.json#/items
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Один контакт пункта маршрута.
 * source: order/objects/route-point-contact.json#/items
 *
 * @property string $name
 * @property string $phone
 * @property string $ext
 */
final class RoutePointContactItems extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'phone' => ['string'], 'ext' => ['string']];
    protected static $nullables = ['name' => false, 'phone' => false, 'ext' => false];
}
