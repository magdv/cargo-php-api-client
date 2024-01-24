<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Root component
 * source: user/responses/user-full-response.json
 *
 * @property UserFullResponseData $data
 */
final class UserFullResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\User\Responses\UserFullResponseData']];
    protected static $nullables = ['data' => false];
}
