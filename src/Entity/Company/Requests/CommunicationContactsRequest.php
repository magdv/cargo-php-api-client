<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/requests/communication-contacts-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Форма редактирования контактов для связи
 * source: company/requests/communication-contacts-request.json
 *
 * @property CommunicationContactsRequestCommunicationContactGroupsItems[] $communicationContactGroups
 */
final class CommunicationContactsRequest extends AbstractEntity
{
    protected static $types = [
        'communicationContactGroups' => [
            'array',
            'Cargomart\ApiClient\Entity\Company\Requests\CommunicationContactsRequestCommunicationContactGroupsItems',
        ],
    ];

    protected static $nullables = ['communicationContactGroups' => false];
}
