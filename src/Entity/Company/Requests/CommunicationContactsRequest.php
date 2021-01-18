<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CommunicationContactGroup;

/**
 * Форма редактирования контактов для связи
 * source: company/requests/communication-contacts-request.json
 *
 * @property CommunicationContactGroup[] $communicationContactGroups
 */
final class CommunicationContactsRequest extends AbstractEntity
{
    protected static $types = [
        'communicationContactGroups' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CommunicationContactGroup'],
    ];

    protected static $nullables = ['communicationContactGroups' => false];
}
