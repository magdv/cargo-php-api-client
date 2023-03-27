<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/responses/user-recovery-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\User\Objects\UserRecovery;

/**
 * source: user/responses/user-recovery-response.json#/properties/data
 *
 * @property UserRecovery $recovery
 */
final class UserRecoveryResponseData extends AbstractEntity
{
    protected static $types = ['recovery' => ['Cargomart\ApiClient\Entity\User\Objects\UserRecovery']];
    protected static $nullables = ['recovery' => false];
}
