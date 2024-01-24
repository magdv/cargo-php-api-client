<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Ws\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Конфигурация WS
 * source: ws/responses/ws-config-response.json
 *
 * @property WsConfigResponseData $data
 */
final class WsConfigResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Ws\Responses\WsConfigResponseData']];
    protected static $nullables = ['data' => false];
}
