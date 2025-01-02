<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Mixins;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Водитель
 * source: order/OrderActNonDeliveryCar/mixins/DigitalActNonDeliveryCarMixin.json#/properties/driver
 *
 * @property string $name
 */
final class DigitalActNonDeliveryCarMixinDriver extends AbstractEntity
{
    protected static $types = ['name' => ['string']];
    protected static $nullables = ['name' => false];
}
