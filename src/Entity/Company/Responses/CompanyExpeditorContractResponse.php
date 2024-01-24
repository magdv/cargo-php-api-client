<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список экспедиторских договоров
 * source: company/responses/company-expeditor-contract-response.json
 *
 * @property CompanyExpeditorContractResponseData $data
 */
final class CompanyExpeditorContractResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyExpeditorContractResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
