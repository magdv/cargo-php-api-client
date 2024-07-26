<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\ExpeditorPayment\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект оплаты по заказу
 * source: order/ExpeditorPayment/objects/expeditor-payment-transaction.json
 *
 * @property string $date
 * @property string $value
 */
final class ExpeditorPaymentTransaction extends AbstractEntity
{
    protected static $types = ['date' => ['string'], 'value' => ['string']];
    protected static $nullables = ['date' => false, 'value' => false];
}
