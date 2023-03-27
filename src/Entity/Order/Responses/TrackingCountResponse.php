<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/tracking-count-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с количеством отслеживаний
 * source: order/responses/tracking-count-response.json
 *
 * @property MessageV2[] $message
 * @property TrackingCountResponseData $data
 */
final class TrackingCountResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\TrackingCountResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
