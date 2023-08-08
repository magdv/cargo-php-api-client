<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статус заказа: 0-template, 1-temp, 2-draft, 3-published, 4-playing, 5-processing, 6-performing, 7-finished, 8-archived, 9-deleted, 21-moderation, 22-moderation_reject, 23-booking_moderation_reject, 250-not_approved, 240-approved, 230-proxy_uploaded, 100-no_bids, 140-other_refuse, 110-carrier_refuse, 120-consignor_refuse, 130_canceled, 90-imported
 * source: order/enums/order-status.json
 */
final class OrderStatus extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
