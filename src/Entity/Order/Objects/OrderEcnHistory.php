<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-ecn-history.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект истории ЭТрН заказа
 * source: order/objects/order-ecn-history.json
 *
 * @property string $title
 * @property string $logisticsStatus
 * @property string $status
 * @property string $type
 */
final class OrderEcnHistory extends AbstractEntity
{
    protected static $types = [
        'title' => ['string'],
        'logisticsStatus' => ['string'],
        'status' => ['string'],
        'type' => ['string'],
    ];

    protected static $nullables = ['title' => false, 'logisticsStatus' => false, 'status' => false, 'type' => false];
}
