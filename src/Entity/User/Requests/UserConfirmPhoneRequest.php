<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/requests/user-confirm-phone-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Форма подтверждения номера сотового телефона по коду из СМС
 * source: user/requests/user-confirm-phone-request.json
 *
 * @property string $code
 */
final class UserConfirmPhoneRequest extends AbstractEntity
{
    protected static $types = ['code' => ['string']];
    protected static $nullables = ['code' => false];
}
