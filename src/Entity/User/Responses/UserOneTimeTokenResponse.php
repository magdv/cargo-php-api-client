<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ для получения одноразового токена
 * source: user/responses/user-one-time-token-response.json
 *
 * @property MessageV2[] $message
 * @property UserOneTimeTokenResponseData $data
 */
final class UserOneTimeTokenResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\User\Responses\UserOneTimeTokenResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
