<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список отслеживания
 * source: order/responses/tracking-list.json
 *
 * @property MessageV2[] $message
 * @property TrackingListData $data
 */
final class TrackingList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\TrackingListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
