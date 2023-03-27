<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: ws/responses/ws-config-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Ws\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Ws\Objects\WsConfig;

/**
 * source: ws/responses/ws-config-response.json#/properties/data
 *
 * @property WsConfig $config
 */
final class WsConfigResponseData extends AbstractEntity
{
    protected static $types = ['config' => ['Cargomart\ApiClient\Entity\Ws\Objects\WsConfig']];
    protected static $nullables = ['config' => false];
}
