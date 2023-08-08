<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Registration\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Регистрация пользователя
 * source: registration/requests/registration-confirm-request.json
 *
 * @property string $code
 */
final class RegistrationConfirmRequest extends AbstractEntity
{
    protected static $types = ['code' => ['string']];
    protected static $nullables = ['code' => false];
}
