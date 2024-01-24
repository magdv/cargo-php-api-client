<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с количеством отслеживаний
 * source: order/responses/tracking-count-response.json
 *
 * @property TrackingCountResponseData $data
 */
final class TrackingCountResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\TrackingCountResponseData']];
    protected static $nullables = ['data' => false];
}
