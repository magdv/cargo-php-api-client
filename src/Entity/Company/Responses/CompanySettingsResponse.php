<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с настройками
 * source: company/responses/company-settings-response.json
 *
 * @property CompanySettingsResponseData $data
 */
final class CompanySettingsResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanySettingsResponseData']];
    protected static $nullables = ['data' => false];
}
