<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список полей json-path заказа
 * source: order/objects/order-field-list.json
 *
 * @property string $id
 * @property string[] $field
 */
final class OrderFieldList extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'field' => ['array', 'string']];
    protected static $nullables = ['id' => false, 'field' => false];
}
