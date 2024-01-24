<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Данные по брокеру
 * source: order/responses/broker-response.json
 *
 * @property BrokerResponseData $data
 */
final class BrokerResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\BrokerResponseData']];
    protected static $nullables = ['data' => false];
}
