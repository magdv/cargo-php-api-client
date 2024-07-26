<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\ExpeditorPayment\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные по оплатам
 * source: order/ExpeditorPayment/objects/expeditor-payment.json
 *
 * @property string $number
 * @property string $date
 * @property string $status
 * @property string $value
 * @property ExpeditorPaymentTransaction[] $payments
 */
final class ExpeditorPayment extends AbstractEntity
{
    protected static $types = [
        'number' => ['string'],
        'date' => ['string'],
        'status' => ['string'],
        'value' => ['string'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Order\ExpeditorPayment\Objects\ExpeditorPaymentTransaction'],
    ];

    protected static $nullables = [
        'number' => false,
        'date' => false,
        'status' => false,
        'value' => false,
        'payments' => false,
    ];
}
