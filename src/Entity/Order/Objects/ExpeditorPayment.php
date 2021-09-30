<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные по оплатам
 * source: order/objects/expeditor-payment.json
 *
 * @property int $orderId
 * @property string $number
 * @property string $date
 * @property string $status
 * @property string $value
 * @property ExpeditorPaymentTransactions[] $payments
 */
final class ExpeditorPayment extends AbstractEntity
{
    protected static $types = [
        'orderId' => ['int'],
        'number' => ['string'],
        'date' => ['string'],
        'status' => ['string'],
        'value' => ['string'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ExpeditorPaymentTransactions'],
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
