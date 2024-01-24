<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * source: user/responses/user-count-active.json
 *
 * @property UserCountActiveData $data
 * @property MessageV2[] $message
 */
final class UserCountActive extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\User\Responses\UserCountActiveData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
