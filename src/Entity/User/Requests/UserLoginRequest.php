<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на авторизацию
 * source: user/requests/user-login-request.json
 *
 * @property string $login
 * @property string $password
 * @property string $oneTimeToken
 */
final class UserLoginRequest extends AbstractEntity
{
    protected static $types = ['login' => ['string'], 'password' => ['string'], 'oneTimeToken' => ['string']];
    protected static $nullables = ['login' => false, 'password' => false, 'oneTimeToken' => false];
}
