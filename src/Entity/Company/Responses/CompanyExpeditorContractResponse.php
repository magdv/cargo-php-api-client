<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-expeditor-contract-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список экспедиторских договоров
 * source: company/responses/company-expeditor-contract-response.json
 *
 * @property MessageV2[] $message
 * @property CompanyExpeditorContractResponseData $data
 */
final class CompanyExpeditorContractResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyExpeditorContractResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
