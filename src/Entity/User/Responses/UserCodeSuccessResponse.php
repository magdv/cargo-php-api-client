<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Успешно подтвержден код
 * source: user/responses/user-code-success-response.json
 *
 * @property UserCodeSuccessResponseData $data
 */
final class UserCodeSuccessResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\User\Responses\UserCodeSuccessResponseData']];
    protected static $nullables = ['data' => false];
}
