<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные пользователя, автора сообщения
 * source: chat/objects/chat-post-creator.json
 *
 * @property int $id
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $email
 * @property string $position
 * @property string $contactPhone
 * @property string $contactPhoneExt
 * @property int $companyId
 * @property bool $disabled
 */
final class ChatPostCreator extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'email' => ['string'],
        'position' => ['string'],
        'contactPhone' => ['string'],
        'contactPhoneExt' => ['string'],
        'companyId' => ['int'],
        'disabled' => ['bool'],
    ];

    protected static $nullables = [
        'id' => false,
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'email' => false,
        'position' => false,
        'contactPhone' => false,
        'contactPhoneExt' => false,
        'companyId' => false,
        'disabled' => false,
    ];
}
