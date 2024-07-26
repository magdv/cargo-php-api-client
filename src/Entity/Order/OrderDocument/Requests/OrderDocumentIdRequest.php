<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDocument\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос с идентификатором документа для заказа
 * source: order/OrderDocument/requests/order-document-id-request.json
 *
 * @property int $id
 */
final class OrderDocumentIdRequest extends AbstractEntity
{
    protected static $types = ['id' => ['int']];
    protected static $nullables = ['id' => false];
}
