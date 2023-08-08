<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект сотрудника
 * source: order/responses/ac-worker-response.json#/properties/data#/properties/worker
 *
 * @property int $id
 * @property string $lastName
 * @property string $firstName
 * @property string $email
 * @property string $phone
 * @property bool $isBlocked
 */
final class AcWorkerResponseDataWorker extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'lastName' => ['string'],
        'firstName' => ['string'],
        'email' => ['string'],
        'phone' => ['string'],
        'isBlocked' => ['bool'],
    ];

    protected static $nullables = [
        'id' => false,
        'lastName' => false,
        'firstName' => false,
        'email' => false,
        'phone' => false,
        'isBlocked' => false,
    ];
}
