<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\User;

/**
 * source: company/responses/communication-contacts-response.json#/properties/data
 *
 * @property CommunicationContactsResponseDataCompany $company
 * @property User[] $contact
 */
final class CommunicationContactsResponseData extends AbstractEntity
{
    protected static $types = [
        'company' => ['Cargomart\ApiClient\Entity\Company\Responses\CommunicationContactsResponseDataCompany'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Base\User'],
    ];

    protected static $nullables = ['company' => false, 'contact' => false];
}
