<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект сообщения для текущего экрана
 * source: company-confirmation/objects/message.json
 *
 * @property string $type
 * @property string $title
 * @property string $description
 * @property string $substring
 */
final class Message extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'title' => ['string'],
        'description' => ['string'],
        'substring' => ['string'],
    ];

    protected static $nullables = ['type' => false, 'title' => false, 'description' => false, 'substring' => false];
}
