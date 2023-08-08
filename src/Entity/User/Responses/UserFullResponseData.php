<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\User\Objects\UserProfileFull;

/**
 * Common response data
 * source: user/responses/user-full-response.json#/properties/data
 *
 * @property UserProfileFull $user
 */
final class UserFullResponseData extends AbstractEntity
{
    protected static $types = ['user' => ['Cargomart\ApiClient\Entity\User\Objects\UserProfileFull']];
    protected static $nullables = ['user' => false];
}
