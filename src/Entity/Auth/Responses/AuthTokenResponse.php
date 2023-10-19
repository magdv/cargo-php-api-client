<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Auth\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с токенами авторизации
 * source: auth/responses/auth-token-response.json
 *
 * @property MessageV2[] $message
 * @property AuthTokenResponseData $data
 */
final class AuthTokenResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Auth\Responses\AuthTokenResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
