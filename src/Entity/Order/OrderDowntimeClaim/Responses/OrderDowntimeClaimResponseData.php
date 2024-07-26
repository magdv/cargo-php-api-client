<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntime;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim;

/**
 * Данные ответа с созданной претензией о простое по заявке
 * source: order/OrderDowntimeClaim/responses/order-downtime-claim-response-data.json
 *
 * @property OrderDowntime $orderDowntime
 * @property OrderDowntimeClaim $orderDowntimeClaim
 */
final class OrderDowntimeClaimResponseData extends AbstractEntity
{
    protected static $types = [
        'orderDowntime' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntime'],
        'orderDowntimeClaim' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim'],
    ];

    protected static $nullables = ['orderDowntime' => false, 'orderDowntimeClaim' => false];
}
