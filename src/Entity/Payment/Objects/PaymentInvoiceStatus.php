<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
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
 * @property string $date
 */
final class PaymentInvoiceStatus extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'status' => ['string'], 'date' => ['string']];
    protected static $nullables = ['type' => false, 'status' => false, 'date' => false];
}
