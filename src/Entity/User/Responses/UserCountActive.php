<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/responses/user-count-active.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * source: user/responses/user-count-active.json
 *
 * @property MessageV2[] $message
 * @property UserCountActiveData $data
 */
final class UserCountActive extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\User\Responses\UserCountActiveData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
