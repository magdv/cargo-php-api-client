<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Меняет пароль пользователю
 * source: user/requests/user-password-change-request.json
 *
 * @property string $password
 * @property string $newPassword
 */
final class UserPasswordChangeRequest extends AbstractEntity
{
    protected static $types = ['password' => ['string'], 'newPassword' => ['string']];
    protected static $nullables = ['password' => false, 'newPassword' => false];
}
