<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Ответ с созданной претензией о простое по заявке
 * source: order/OrderDowntimeClaim/responses/order-downtime-claim-response.json
 *
 * @property OrderDowntimeClaimResponseData $data
 */
final class OrderDowntimeClaimResponse extends AbstractEntity
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Responses\OrderDowntimeClaimResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
