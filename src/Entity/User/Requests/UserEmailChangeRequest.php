<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/requests/user-email-change-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Меняет почту пользователю
 * source: user/requests/user-email-change-request.json
 *
 * @property string $email
 */
final class UserEmailChangeRequest extends AbstractEntity
{
    protected static $types = ['email' => ['string']];
    protected static $nullables = ['email' => false];
}
