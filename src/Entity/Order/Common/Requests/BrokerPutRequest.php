<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Устанавливаем минимаьлную ставку для брокера.
 * source: order/Common/requests/broker-put-request.json
 *
 * @property float $minBid
 */
final class BrokerPutRequest extends AbstractEntity
{
    protected static $types = ['minBid' => ['float']];
    protected static $nullables = ['minBid' => false];
}
