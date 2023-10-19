<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Auth\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на разлогин пользователя
 * source: auth/requests/logout-request.json
 *
 * @property string $refreshToken
 */
final class LogoutRequest extends AbstractEntity
{
    protected static $types = ['refreshToken' => ['string']];
    protected static $nullables = ['refreshToken' => false];
}
