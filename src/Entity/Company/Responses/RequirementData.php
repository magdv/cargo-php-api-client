<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Common response data
 * source: company/responses/requirement.json#/properties/data
 *
 * @property RequirementDataCompany $company
 */
final class RequirementData extends AbstractEntity
{
    protected static $types = ['company' => ['Cargomart\ApiClient\Entity\Company\Responses\RequirementDataCompany']];
    protected static $nullables = ['company' => false];
}
