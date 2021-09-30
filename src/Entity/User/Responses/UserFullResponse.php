<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Root component
 * source: user/responses/user-full-response.json
 *
 * @property MessageV2[] $message
 * @property UserFullResponseData $data
 */
final class UserFullResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\User\Responses\UserFullResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
