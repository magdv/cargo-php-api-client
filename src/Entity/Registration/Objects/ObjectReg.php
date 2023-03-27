<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: registration/objects/object-reg.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Registration\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект процесса регистрации
 * source: registration/objects/object-reg.json
 *
 * @property string $id
 * @property string $type
 * @property string $login
 * @property int $delay
 * @property string $availableResendCodeDate
 * @property string $password
 * @property string $token
 * @property string $expirationDate
 * @property bool $isInvited
 */
final class ObjectReg extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'type' => ['string'],
        'login' => ['string'],
        'delay' => ['int'],
        'availableResendCodeDate' => ['string'],
        'password' => ['string'],
        'token' => ['string'],
        'expirationDate' => ['string'],
        'isInvited' => ['bool'],
    ];

    protected static $nullables = [
        'id' => false,
        'type' => false,
        'login' => false,
        'delay' => false,
        'availableResendCodeDate' => false,
        'password' => false,
        'token' => false,
        'expirationDate' => false,
        'isInvited' => false,
    ];
}
