<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/responses/user-login-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Авторизация пользователя
 * source: user/responses/user-login-response.json
 *
 * @property MessageV2[] $message
 * @property UserLoginResponseData $data
 */
final class UserLoginResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\User\Responses\UserLoginResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
