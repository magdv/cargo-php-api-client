<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ для получения одноразового токена
 * source: user/responses/user-one-time-token-response.json
 *
 * @property UserOneTimeTokenResponseData $data
 */
final class UserOneTimeTokenResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\User\Responses\UserOneTimeTokenResponseData']];
    protected static $nullables = ['data' => false];
}
