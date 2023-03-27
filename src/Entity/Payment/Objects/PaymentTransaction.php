<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: payment/objects/payment-transaction.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Payment\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Отдельный платеж оплаты счёта
 * source: payment/objects/payment-transaction.json
 *
 * @property string $date
 * @property string $value
 */
final class PaymentTransaction extends AbstractEntity
{
    protected static $types = ['date' => ['string'], 'value' => ['string']];
    protected static $nullables = ['date' => false, 'value' => false];
}
