<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация по последнему запросу на изменение заказа.
 * source: order/objects/order-patch-last-item.json
 *
 * @property string $id
 * @property int $statusId
 * @property string $reason
 */
final class OrderPatchLastItem extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'statusId' => ['int'], 'reason' => ['string']];
    protected static $nullables = ['id' => false, 'statusId' => false, 'reason' => false];
}
