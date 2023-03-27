<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/order-document-update-all-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для запроса на валидацию перед созданием документов заказа и отправкой на модерацию
 * source: order/requests/order-document-update-all-request.json
 *
 * @property OrderDocumentUpdateRequest[] $orderDocuments
 */
final class OrderDocumentUpdateAllRequest extends AbstractEntity
{
    protected static $types = [
        'orderDocuments' => ['array', 'Cargomart\ApiClient\Entity\Order\Requests\OrderDocumentUpdateRequest'],
    ];

    protected static $nullables = ['orderDocuments' => false];
}
