<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-payment-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Payment\Models\Payment;

/**
 * Список оплат по счёту
 * source: order/responses/order-payment-response.json#/properties/data
 *
 * @property Payment[] $payment
 */
final class OrderPaymentResponseData extends AbstractEntity
{
    protected static $types = ['payment' => ['array', 'Cargomart\ApiClient\Entity\Payment\Models\Payment']];
    protected static $nullables = ['payment' => false];
}
