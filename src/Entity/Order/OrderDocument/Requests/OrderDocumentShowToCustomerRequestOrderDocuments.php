<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDocument\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Признак по каждому документу
 * source: order/OrderDocument/requests/order-document-show-to-customer-request.json#/properties/orderDocuments
 *
 * @property string $id
 * @property bool $show
 */
final class OrderDocumentShowToCustomerRequestOrderDocuments extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'show' => ['bool']];
    protected static $nullables = ['id' => false, 'show' => false];
}
