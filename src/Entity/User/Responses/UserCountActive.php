<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * source: user/responses/user-count-active.json
 *
 * @property UserCountActiveData $data
 */
final class UserCountActive extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\User\Responses\UserCountActiveData']];
    protected static $nullables = ['data' => false];
}
