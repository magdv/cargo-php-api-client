<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Root component
 * source: company/responses/company-response.json
 *
 * @property CompanyResponseData $data
 */
final class CompanyResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyResponseData']];
    protected static $nullables = ['data' => false];
}
