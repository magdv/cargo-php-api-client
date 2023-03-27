<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/communication-contacts-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: company/responses/communication-contacts-response.json#/properties/data
 *
 * @property CommunicationContactsResponseDataCompany $company
 * @property UserContactShort[] $contact
 */
final class CommunicationContactsResponseData extends AbstractEntity
{
    protected static $types = [
        'company' => ['Cargomart\ApiClient\Entity\Company\Responses\CommunicationContactsResponseDataCompany'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = ['company' => false, 'contact' => false];
}
