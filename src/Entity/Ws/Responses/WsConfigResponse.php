<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Ws\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Конфигурация WS
 * source: ws/responses/ws-config-response.json
 *
 * @property MessageV2[] $message
 * @property WsConfigResponseData $data
 */
final class WsConfigResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Ws\Responses\WsConfigResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
