<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о контактах компании для связи из титула отправителя
 * source: simple-document/objects/payload-chunk-communication-contact-groups.json
 *
 * @property string $name
 * @property string[] $contacts
 */
final class PayloadChunkCommunicationContactGroups extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'contacts' => ['array', 'string']];
    protected static $nullables = ['name' => false, 'contacts' => false];
}
