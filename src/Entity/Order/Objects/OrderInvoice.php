<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные счета
 * source: order/objects/order-invoice.json
 *
 * @property int $orderId
 * @property string $number
 * @property string $date
 * @property string $status
 * @property string $value
 * @property OrderInvoicePayment[] $payments
 */
final class OrderInvoice extends AbstractEntity
{
    protected static $types = [
        'orderId' => ['int'],
        'number' => ['string'],
        'date' => ['string'],
        'status' => ['string'],
        'value' => ['string'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderInvoicePayment'],
    ];

    protected static $nullables = [
        'orderId' => false,
        'number' => false,
        'date' => false,
        'status' => false,
        'value' => false,
        'payments' => false,
    ];
}
