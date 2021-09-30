<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с информацией о компании
 * source: company/responses/company-info-response.json
 *
 * @property MessageV2[] $message
 * @property CompanyInfoResponseData $data
 */
final class CompanyInfoResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyInfoResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
