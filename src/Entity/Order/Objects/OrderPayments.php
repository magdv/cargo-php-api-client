<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\PayValue;

/**
 * Наборы платежей по заказу
 * source: order/objects/order-payments.json
 *
 * @property string $type
 * @property PayValue $base
 * @property PayValue $commission
 * @property PayValue $total
 */
final class OrderPayments extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'base' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'commission' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'total' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
    ];

    protected static $nullables = ['type' => false, 'base' => false, 'commission' => false, 'total' => false];
}
