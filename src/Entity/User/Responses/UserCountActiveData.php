<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Common response data
 * source: user/responses/user-count-active.json#/properties/data
 *
 * @property UserCountActiveDataUser $user
 */
final class UserCountActiveData extends AbstractEntity
{
    protected static $types = ['user' => ['Cargomart\ApiClient\Entity\User\Responses\UserCountActiveDataUser']];
    protected static $nullables = ['user' => false];
}
