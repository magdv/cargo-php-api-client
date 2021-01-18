<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на восстановление пароля
 * source: user/requests/user-recovery-create-request.json
 *
 * @property string $login
 */
final class UserRecoveryCreateRequest extends AbstractEntity
{
    protected static $types = ['login' => ['string']];
    protected static $nullables = ['login' => false];
}
