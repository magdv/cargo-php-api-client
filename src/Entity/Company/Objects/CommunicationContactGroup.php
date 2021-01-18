<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Группа контактов для связи
 * source: company/objects/communication-contact-group.json
 *
 * @property int $id
 * @property string $groupName
 * @property int[] $contactIds
 */
final class CommunicationContactGroup extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'groupName' => ['string'], 'contactIds' => ['array', 'int']];
    protected static $nullables = ['id' => false, 'groupName' => false, 'contactIds' => false];
}
