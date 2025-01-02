<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект оплаты по счету
 * source: order/Common/objects/order-invoice-payment.json
 *
 * @property string $date
 * @property string $value
 */
final class OrderInvoicePayment extends AbstractEntity
{
    protected static $types = ['date' => ['string'], 'value' => ['string']];
    protected static $nullables = ['date' => false, 'value' => false];
}
