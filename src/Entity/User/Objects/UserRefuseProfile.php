<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Профиль пользователя при отказе
 * source: user/objects/user-refuse-profile.json
 *
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 */
final class UserRefuseProfile extends AbstractEntity
{
    protected static $types = ['lastName' => ['string'], 'firstName' => ['string'], 'secondName' => ['string']];
    protected static $nullables = ['lastName' => false, 'firstName' => false, 'secondName' => false];
}
