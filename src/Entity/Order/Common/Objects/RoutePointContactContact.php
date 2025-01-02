<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Один контакт пункта маршрута.
 * source: order/Common/objects/route-point-contact.json#/properties/contact
 *
 * @property string $name
 * @property string $phone
 * @property string $ext
 */
final class RoutePointContactContact extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'phone' => ['string'], 'ext' => ['string']];
    protected static $nullables = ['name' => false, 'phone' => false, 'ext' => false];
}
