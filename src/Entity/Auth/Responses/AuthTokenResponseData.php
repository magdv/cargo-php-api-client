<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: auth/responses/auth-token-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Auth\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Common response data
 * source: auth/responses/auth-token-response.json#/properties/data
 *
 * @property string $accessToken
 * @property string $refreshToken
 */
final class AuthTokenResponseData extends AbstractEntity
{
    protected static $types = ['accessToken' => ['string'], 'refreshToken' => ['string']];
    protected static $nullables = ['accessToken' => false, 'refreshToken' => false];
}
