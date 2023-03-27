<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: auth/requests/refresh-token-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Auth\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на обновление токена
 * source: auth/requests/refresh-token-request.json
 *
 * @property string $deviceId
 * @property string $refreshToken
 */
final class RefreshTokenRequest extends AbstractEntity
{
    protected static $types = ['deviceId' => ['string'], 'refreshToken' => ['string']];
    protected static $nullables = ['deviceId' => false, 'refreshToken' => false];
}
