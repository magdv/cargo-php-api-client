<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с информацией о процессе восстановления пароля
 * source: user/responses/user-recovery-response.json
 *
 * @property UserRecoveryResponseData $data
 */
final class UserRecoveryResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\User\Responses\UserRecoveryResponseData']];
    protected static $nullables = ['data' => false];
}
