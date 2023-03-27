<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/communication-contacts-response.json#/properties/data/properties/company
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CommunicationContactGroup;

/**
 * source: company/responses/communication-contacts-response.json#/properties/data/properties/company
 *
 * @property string $id
 * @property CommunicationContactGroup[] $communicationContactGroups
 */
final class CommunicationContactsResponseDataCompany extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'communicationContactGroups' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CommunicationContactGroup'],
    ];

    protected static $nullables = ['id' => false, 'communicationContactGroups' => false];
}
