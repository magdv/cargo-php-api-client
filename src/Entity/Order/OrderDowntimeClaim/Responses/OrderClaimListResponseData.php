<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim;

/**
 * source: order/OrderDowntimeClaim/responses/OrderClaimListResponse.json#/properties/data
 *
 * @property OrderDowntimeClaim[] $orderClaim
 */
final class OrderClaimListResponseData extends AbstractEntity
{
    protected static $types = [
        'orderClaim' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim'],
    ];

    protected static $nullables = ['orderClaim' => false];
}
