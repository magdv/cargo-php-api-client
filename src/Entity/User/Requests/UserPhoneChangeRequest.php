<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/requests/user-phone-change-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Меняет номер телефона пользователю
 * source: user/requests/user-phone-change-request.json
 *
 * @property string $phone
 */
final class UserPhoneChangeRequest extends AbstractEntity
{
    protected static $types = ['phone' => ['string']];
    protected static $nullables = ['phone' => false];
}
