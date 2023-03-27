<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: registration/requests/registration-base-request.json
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
 * @property string $captcha
 */
final class RegistrationBaseRequest extends AbstractEntity
{
    protected static $types = ['confirm' => ['bool'], 'login' => ['string'], 'role' => ['string'], 'captcha' => ['string']];
    protected static $nullables = ['confirm' => false, 'login' => false, 'role' => false, 'captcha' => false];
}
