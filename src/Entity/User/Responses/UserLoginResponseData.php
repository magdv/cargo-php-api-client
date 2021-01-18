<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные ответа
 * source: user/responses/user-login-response.json#/properties/data
 *
 * @property UserLoginResponseDataToken $token
 */
final class UserLoginResponseData extends AbstractEntity
{
    protected static $types = ['token' => ['Cargomart\ApiClient\Entity\User\Responses\UserLoginResponseDataToken']];
    protected static $nullables = ['token' => false];
}
