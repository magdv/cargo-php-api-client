<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Авторизация пользователя
 * source: user/responses/user-login-response.json
 *
 * @property UserLoginResponseData $data
 */
final class UserLoginResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\User\Responses\UserLoginResponseData']];
    protected static $nullables = ['data' => false];
}
