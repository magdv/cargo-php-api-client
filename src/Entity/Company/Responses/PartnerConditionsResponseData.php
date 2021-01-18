<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\User;
use Cargomart\ApiClient\Entity\Company\Objects\PartnerConditions;

/**
 * source: company/responses/partner-conditions-response.json#/properties/data
 *
 * @property PartnerConditions $company
 * @property User[] $contact
 */
final class PartnerConditionsResponseData extends AbstractEntity
{
    protected static $types = [
        'company' => ['Cargomart\ApiClient\Entity\Company\Objects\PartnerConditions'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Base\User'],
    ];

    protected static $nullables = ['company' => false, 'contact' => false];
}
