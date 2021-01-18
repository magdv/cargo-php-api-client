<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список изменений
 * source: chat/objects/payload/chat-post-payload-model-field-change.json#/properties/changes
 *
 * @property string $field
 * @property string $name
 * @property string $old
 * @property string $new
 * @property string $operation
 */
final class ChatPostPayloadModelFieldChangeChanges extends AbstractEntity
{
    protected static $types = [
        'field' => ['string'],
        'name' => ['string'],
        'old' => ['string'],
        'new' => ['string'],
        'operation' => ['string'],
    ];

    protected static $nullables = ['field' => false, 'name' => false, 'old' => true, 'new' => true, 'operation' => false];
}
