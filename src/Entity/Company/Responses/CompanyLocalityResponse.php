<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Регионы доступные для перевозок
 * source: company/responses/company-locality-response.json
 *
 * @property CompanyLocalityResponseData $data
 */
final class CompanyLocalityResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyLocalityResponseData']];
    protected static $nullables = ['data' => false];
}
