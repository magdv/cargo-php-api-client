<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/requests/user-contact-email-confirm-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Подтверждение контактного email
 * source: user/requests/user-contact-email-confirm-request.json
 *
 * @property string $code
 */
final class UserContactEmailConfirmRequest extends AbstractEntity
{
    protected static $types = ['code' => ['string']];
    protected static $nullables = ['code' => false];
}
