<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPatch\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект списка статуса заявки на изменение
 * source: order/OrderPatch/objects/order-patch-status-type.json
 *
 * @property int $id
 * @property string $name
 */
final class OrderPatchStatusType extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false];
}
