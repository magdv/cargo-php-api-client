<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: worker/requests/worker-change-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на создание/редактирование сотрудника
 * source: worker/requests/worker-change-request.json
 *
 * @property int $roleId
 * @property string $email
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $position
 * @property string $contactPhone
 * @property string $contactPhoneExt
 * @property string $contactEmail
 */
final class WorkerChangeRequest extends AbstractEntity
{
    protected static $types = [
        'roleId' => ['int'],
        'email' => ['string'],
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'position' => ['string'],
        'contactPhone' => ['string'],
        'contactPhoneExt' => ['string'],
        'contactEmail' => ['string'],
    ];

    protected static $nullables = [
        'roleId' => false,
        'email' => false,
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'position' => false,
        'contactPhone' => false,
        'contactPhoneExt' => false,
        'contactEmail' => false,
    ];
}
