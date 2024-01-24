<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с информацией о компании
 * source: company/responses/company-info-response.json
 *
 * @property CompanyInfoResponseData $data
 */
final class CompanyInfoResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyInfoResponseData']];
    protected static $nullables = ['data' => false];
}
