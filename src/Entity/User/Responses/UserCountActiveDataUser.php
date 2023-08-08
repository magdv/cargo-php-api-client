<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Результирующий объект.
 * source: user/responses/user-count-active.json#/properties/data#/properties/user
 *
 * @property int $count
 */
final class UserCountActiveDataUser extends AbstractEntity
{
    protected static $types = ['count' => ['int']];
    protected static $nullables = ['count' => false];
}
