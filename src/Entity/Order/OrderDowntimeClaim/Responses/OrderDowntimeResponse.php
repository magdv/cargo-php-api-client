<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с простоем по заявке
 * source: order/OrderDowntimeClaim/responses/OrderDowntimeResponse.json
 *
 * @property OrderDowntimeResponseData $data
 * @property MessageV2[] $message
 */
final class OrderDowntimeResponse extends AbstractEntity
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Responses\OrderDowntimeResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
