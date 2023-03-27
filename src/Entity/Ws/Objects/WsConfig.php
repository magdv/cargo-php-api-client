<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: ws/objects/ws-config.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Ws\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Настройки WS
 * source: ws/objects/ws-config.json
 *
 * @property string $url
 * @property string $socket
 * @property string $token
 * @property string $userId
 */
final class WsConfig extends AbstractEntity
{
    protected static $types = ['url' => ['string'], 'socket' => ['string'], 'token' => ['string'], 'userId' => ['string']];
    protected static $nullables = ['url' => false, 'socket' => false, 'token' => false, 'userId' => false];
}
