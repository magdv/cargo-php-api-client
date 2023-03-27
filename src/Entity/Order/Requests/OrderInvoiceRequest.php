<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/order-invoice-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderInvoicePayment;

/**
 * Данные для добавления платежей
 * source: order/requests/order-invoice-request.json
 *
 * @property string $number
 * @property string $date
 * @property string $status
 * @property string $value
 * @property OrderInvoicePayment[] $payments
 */
final class OrderInvoiceRequest extends AbstractEntity
{
    protected static $types = [
        'number' => ['string'],
        'date' => ['string'],
        'status' => ['string'],
        'value' => ['string'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderInvoicePayment'],
    ];

    protected static $nullables = [
        'number' => false,
        'date' => false,
        'status' => false,
        'value' => false,
        'payments' => false,
    ];
}
