<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: order/OrderDowntimeClaim/requests/OrderDowntimeClaimCancelRequest.json
 *
 * @property \stdClass $reason
 */
final class OrderDowntimeClaimCancelRequest extends AbstractEntity
{
    protected static $types = ['reason' => ['\stdClass']];
    protected static $nullables = ['reason' => true];
}
