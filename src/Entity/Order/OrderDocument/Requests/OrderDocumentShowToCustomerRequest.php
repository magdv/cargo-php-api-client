<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDocument\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Установка возможности просмотра определенных документов заказчиком
 * source: order/OrderDocument/requests/order-document-show-to-customer-request.json
 *
 * @property OrderDocumentShowToCustomerRequestOrderDocuments[] $orderDocuments
 */
final class OrderDocumentShowToCustomerRequest extends AbstractEntity
{
    protected static $types = [
        'orderDocuments' => [
            'array',
            'Cargomart\ApiClient\Entity\Order\OrderDocument\Requests\OrderDocumentShowToCustomerRequestOrderDocuments',
        ],
    ];

    protected static $nullables = ['orderDocuments' => false];
}
