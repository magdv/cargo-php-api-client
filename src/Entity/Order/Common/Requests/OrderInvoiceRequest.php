<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderInvoicePayment;

/**
 * Данные для добавления платежей
 * source: order/Common/requests/order-invoice-request.json
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
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderInvoicePayment'],
    ];

    protected static $nullables = [
        'number' => false,
        'date' => false,
        'status' => false,
        'value' => false,
        'payments' => false,
    ];
}
