<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\Company;
use Cargomart\ApiClient\Entity\Order\Objects\OrderContactItem;

/**
 * Common response data
 * source: company/responses/company-response.json#/properties/data
 *
 * @property Company $company
 * @property OrderContactItem[] $contact
 */
final class CompanyResponseData extends AbstractEntity
{
    protected static $types = [
        'company' => ['Cargomart\ApiClient\Entity\Company\Objects\Company'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderContactItem'],
    ];

    protected static $nullables = ['company' => false, 'contact' => false];
}
