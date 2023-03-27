<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: payment/objects/payment-invoice-status.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Payment\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статус оплаты счета
 * source: payment/objects/payment-invoice-status.json
 *
 * @property string $type
 * @property string $status
 */
final class PaymentInvoiceStatus extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'status' => ['string']];
    protected static $nullables = ['type' => false, 'status' => false];
}
