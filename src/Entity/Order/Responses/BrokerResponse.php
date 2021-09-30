<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Данные по брокеру
 * source: order/responses/broker-response.json
 *
 * @property MessageV2[] $message
 * @property BrokerResponseData $data
 */
final class BrokerResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\BrokerResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
