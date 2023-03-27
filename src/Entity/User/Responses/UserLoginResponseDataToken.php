<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/responses/user-login-response.json#/properties/data/properties/token
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Модель токена
 * source: user/responses/user-login-response.json#/properties/data/properties/token
 *
 * @property string $token
 */
final class UserLoginResponseDataToken extends AbstractEntity
{
    protected static $types = ['token' => ['string']];
    protected static $nullables = ['token' => false];
}
