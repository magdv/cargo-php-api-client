<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-invoice-payment.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект оплаты по счету
 * source: order/objects/order-invoice-payment.json
 *
 * @property string $date
 * @property string $value
 */
final class OrderInvoicePayment extends AbstractEntity
{
    protected static $types = ['date' => ['string'], 'value' => ['string']];
    protected static $nullables = ['date' => false, 'value' => false];
}
