<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-document-type.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект типа документа заказа
 * source: order/objects/order-document-type.json
 *
 * @property string $id
 * @property string $name
 */
final class OrderDocumentType extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false];
}
