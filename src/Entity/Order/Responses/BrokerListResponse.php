<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список брокеров по брокеру
 * source: order/responses/broker-list-response.json
 *
 * @property MessageV2[] $message
 * @property BrokerListResponseData $data
 */
final class BrokerListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\BrokerListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
