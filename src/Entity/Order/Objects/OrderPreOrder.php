<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация по предзаказу, связанному с заказом.
 * source: order/objects/order-pre-order.json
 *
 * @property int $preOrderId
 * @property string $startPublicDateTime
 * @property string $acceptDateTime
 */
final class OrderPreOrder extends AbstractEntity
{
    protected static $types = [
        'preOrderId' => ['int'],
        'startPublicDateTime' => ['string'],
        'acceptDateTime' => ['string'],
    ];

    protected static $nullables = ['preOrderId' => false, 'startPublicDateTime' => false, 'acceptDateTime' => false];
}
