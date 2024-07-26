<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPayment\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\PayValue;

/**
 * Платёж по заявке
 * source: order/OrderPayment/objects/OrderPayment.json
 *
 * @property string $type
 * @property PayValue $base
 * @property PayValue $commission
 * @property PayValue $total
 */
final class OrderPayment extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'base' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'commission' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'total' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
    ];

    protected static $nullables = ['type' => false, 'base' => false, 'commission' => false, 'total' => false];
}
