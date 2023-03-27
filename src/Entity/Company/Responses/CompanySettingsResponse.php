<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-settings-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с настройками
 * source: company/responses/company-settings-response.json
 *
 * @property MessageV2[] $message
 * @property CompanySettingsResponseData $data
 */
final class CompanySettingsResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanySettingsResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
