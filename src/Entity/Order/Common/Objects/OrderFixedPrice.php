<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект с данными по токену
 * source: order/Common/objects/order-fixed-price.json
 *
 * @property string $orderId
 * @property string $carrierId
 * @property string $deadline
 * @property string $price
 * @property string $token
 */
final class OrderFixedPrice extends AbstractEntity
{
    protected static $types = [
        'orderId' => ['string'],
        'carrierId' => ['string'],
        'deadline' => ['string'],
        'price' => ['string'],
        'token' => ['string'],
    ];

    protected static $nullables = [
        'orderId' => false,
        'carrierId' => false,
        'deadline' => false,
        'price' => false,
        'token' => false,
    ];
}
