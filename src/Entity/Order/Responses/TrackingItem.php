<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Объект отслеживания
 * source: order/responses/tracking-item.json
 *
 * @property TrackingItemData $data
 */
final class TrackingItem extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\TrackingItemData']];
    protected static $nullables = ['data' => false];
}
