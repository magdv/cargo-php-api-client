<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект контакта
 * source: order/objects/order-contact-item.json
 *
 * @property int $id
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $email
 * @property string $position
 * @property string $contactPhone
 * @property string $companyId
 */
final class OrderContactItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'email' => ['string'],
        'position' => ['string'],
        'contactPhone' => ['string'],
        'companyId' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'email' => false,
        'position' => false,
        'contactPhone' => false,
        'companyId' => false,
    ];
}
