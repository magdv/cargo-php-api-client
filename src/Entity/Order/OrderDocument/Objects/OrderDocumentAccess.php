<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к документу заказа
 * source: order/OrderDocument/objects/order-document-access.json
 *
 * @property bool $view
 * @property bool $update
 * @property bool $delete
 */
final class OrderDocumentAccess extends AbstractEntity
{
    protected static $types = ['view' => ['bool'], 'update' => ['bool'], 'delete' => ['bool']];
    protected static $nullables = ['view' => false, 'update' => false, 'delete' => false];
}
