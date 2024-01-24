<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Auth\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с токенами авторизации
 * source: auth/responses/auth-token-response.json
 *
 * @property AuthTokenResponseData $data
 */
final class AuthTokenResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Auth\Responses\AuthTokenResponseData']];
    protected static $nullables = ['data' => false];
}
