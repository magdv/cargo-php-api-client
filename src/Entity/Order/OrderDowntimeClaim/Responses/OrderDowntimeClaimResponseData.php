<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim;

/**
 * source: order/OrderDowntimeClaim/responses/OrderDowntimeClaimResponse.json#/properties/data
 *
 * @property OrderDowntimeClaim $orderDowntimeClaim
 */
final class OrderDowntimeClaimResponseData extends AbstractEntity
{
    protected static $types = [
        'orderDowntimeClaim' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim'],
    ];

    protected static $nullables = ['orderDowntimeClaim' => false];
}
