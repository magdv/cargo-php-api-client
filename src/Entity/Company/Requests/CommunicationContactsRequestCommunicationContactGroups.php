<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Группы контактов
 * source: company/requests/communication-contacts-request.json#/properties/communicationContactGroups
 *
 * @property \stdClass $id
 * @property string $groupName
 * @property int[] $contactIds
 */
final class CommunicationContactsRequestCommunicationContactGroups extends AbstractEntity
{
    protected static $types = ['id' => ['\stdClass'], 'groupName' => ['string'], 'contactIds' => ['array', 'int']];
    protected static $nullables = ['id' => true, 'groupName' => false, 'contactIds' => false];
}
