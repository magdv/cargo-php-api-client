<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Registration\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Подтверждение регистрации пользователя
 * source: registration/requests/registration-base-request.json
 *
 * @property bool $confirm
 * @property string $login
 * @property string $role
 */
final class RegistrationBaseRequest extends AbstractEntity
{
    protected static $types = ['confirm' => ['bool'], 'login' => ['string'], 'role' => ['string']];
    protected static $nullables = ['confirm' => false, 'login' => false, 'role' => false];
}
