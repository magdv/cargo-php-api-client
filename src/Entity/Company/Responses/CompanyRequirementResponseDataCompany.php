<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\Requirement;

/**
 * Компания отправителя
 * source: company/responses/company-requirement-response.json#/properties/data#/properties/company
 *
 * @property string $id
 * @property Requirement $requirement
 */
final class CompanyRequirementResponseDataCompany extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'requirement' => ['Cargomart\ApiClient\Entity\Company\Objects\Requirement'],
    ];

    protected static $nullables = ['id' => false, 'requirement' => false];
}
