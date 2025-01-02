<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект сотрудника
 * source: order/Common/responses/ac-worker-response.json#/properties/data#/properties/worker
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
 * @property bool $isBlocked
 */
final class AcWorkerResponseDataWorker extends AbstractEntity
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
        'isBlocked' => ['bool'],
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
        'isBlocked' => false,
    ];
}
