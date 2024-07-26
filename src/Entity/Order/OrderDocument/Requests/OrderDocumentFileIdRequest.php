<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDocument\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Тело запроса для создания/редактирования документа из файлов
 * source: order/OrderDocument/requests/order-document-file-id-request.json
 *
 * @property int[] $id
 */
final class OrderDocumentFileIdRequest extends AbstractEntity
{
    protected static $types = ['id' => ['array', 'int']];
    protected static $nullables = ['id' => false];
}
