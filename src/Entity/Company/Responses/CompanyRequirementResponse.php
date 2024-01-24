<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Требования отправителя к перевозкам
 * source: company/responses/company-requirement-response.json
 *
 * @property CompanyRequirementResponseData $data
 */
final class CompanyRequirementResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyRequirementResponseData']];
    protected static $nullables = ['data' => false];
}
