<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/responses/user-one-time-token-response.json#/properties/data/properties/oneTimeToken
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Модель одноразового токена
 * source: user/responses/user-one-time-token-response.json#/properties/data/properties/oneTimeToken
 *
 * @property string $token
 */
final class UserOneTimeTokenResponseDataOneTimeToken extends AbstractEntity
{
    protected static $types = ['token' => ['string']];
    protected static $nullables = ['token' => false];
}
