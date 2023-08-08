<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Форма подтверждения email по коду
 * source: user/requests/user-confirm-email-request.json
 *
 * @property string $emailConfirmationCode
 */
final class UserConfirmEmailRequest extends AbstractEntity
{
    protected static $types = ['emailConfirmationCode' => ['string']];
    protected static $nullables = ['emailConfirmationCode' => false];
}
