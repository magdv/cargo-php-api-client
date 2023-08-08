<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект процесса восстановления пароля
 * source: user/objects/user-recovery.json
 *
 * @property string $id
 * @property string $type
 * @property string $login
 * @property int $delay
 * @property string $availableResendCodeDate
 * @property string $password
 * @property string $token
 */
final class UserRecovery extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'type' => ['string'],
        'login' => ['string'],
        'delay' => ['int'],
        'availableResendCodeDate' => ['string'],
        'password' => ['string'],
        'token' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'type' => false,
        'login' => false,
        'delay' => false,
        'availableResendCodeDate' => false,
        'password' => false,
        'token' => false,
    ];
}
