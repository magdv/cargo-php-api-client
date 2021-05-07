<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\PartnerConditions;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: company/responses/partner-conditions-response.json#/properties/data
 *
 * @property PartnerConditions $company
 * @property UserContactShort[] $contact
 */
final class PartnerConditionsResponseData extends AbstractEntity
{
    protected static $types = [
        'company' => ['Cargomart\ApiClient\Entity\Company\Objects\PartnerConditions'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = ['company' => false, 'contact' => false];
}
