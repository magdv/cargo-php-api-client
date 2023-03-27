<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-invoice-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderInvoice;

/**
 * source: order/responses/order-invoice-response.json#/properties/data
 *
 * @property OrderInvoice $invoice
 */
final class OrderInvoiceResponseData extends AbstractEntity
{
    protected static $types = ['invoice' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderInvoice']];
    protected static $nullables = ['invoice' => false];
}
