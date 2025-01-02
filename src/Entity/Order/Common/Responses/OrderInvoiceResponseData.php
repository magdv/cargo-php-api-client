<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderInvoice;

/**
 * source: order/Common/responses/order-invoice-response.json#/properties/data
 *
 * @property OrderInvoice $invoice
 */
final class OrderInvoiceResponseData extends AbstractEntity
{
    protected static $types = ['invoice' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderInvoice']];
    protected static $nullables = ['invoice' => false];
}
