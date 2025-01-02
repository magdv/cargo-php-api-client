<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimPointFields;

/**
 * Данные для создания требования
 * source: order/OrderDowntimeClaim/requests/OrderDowntimeClaimCreateRequest.json
 *
 * @property OrderDowntimeClaimPointFields[] $points
 */
final class OrderDowntimeClaimCreateRequest extends AbstractEntity
{
    protected static $types = [
        'points' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimPointFields'],
    ];

    protected static $nullables = ['points' => false];
}
