<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: auth/requests/login-password-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Auth\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на аутентификацию пользователя по логину и паролю
 * source: auth/requests/login-password-request.json
 *
 * @property string $login
 * @property string $password
 * @property string $deviceId
 */
final class LoginPasswordRequest extends AbstractEntity
{
    protected static $types = ['login' => ['string'], 'password' => ['string'], 'deviceId' => ['string']];
    protected static $nullables = ['login' => false, 'password' => false, 'deviceId' => false];
}
