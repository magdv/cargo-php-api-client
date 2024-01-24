<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список брокеров по брокеру
 * source: order/responses/broker-list-response.json
 *
 * @property BrokerListResponseData $data
 */
final class BrokerListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\BrokerListResponseData']];
    protected static $nullables = ['data' => false];
}
