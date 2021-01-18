<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Сотрудник
 * source: worker/objects/worker.json
 *
 * @property int $id
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $email
 * @property string $phone
 * @property string $contactPhone
 * @property string $contactPhoneExt
 * @property string $contactEmail
 * @property string $contactEmailStatus
 * @property string $position
 * @property int $roleId
 * @property bool $isBlocked
 * @property string $timezone
 * @property string $inviteStatus
 * @property string $inviteExpireDate
 * @property WorkerAccess $access
 */
final class Worker extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'email' => ['string'],
        'phone' => ['string'],
        'contactPhone' => ['string'],
        'contactPhoneExt' => ['string'],
        'contactEmail' => ['string'],
        'contactEmailStatus' => ['string'],
        'position' => ['string'],
        'roleId' => ['int'],
        'isBlocked' => ['bool'],
        'timezone' => ['string'],
        'inviteStatus' => ['string'],
        'inviteExpireDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Worker\Objects\WorkerAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'email' => false,
        'phone' => false,
        'contactPhone' => false,
        'contactPhoneExt' => false,
        'contactEmail' => false,
        'contactEmailStatus' => false,
        'position' => false,
        'roleId' => false,
        'isBlocked' => false,
        'timezone' => false,
        'inviteStatus' => false,
        'inviteExpireDate' => false,
        'access' => false,
    ];
}
