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
 * Регионы доступные для перевозок
 * source: company/responses/company-locality-response.json
 *
 * @property MessageV2[] $message
 * @property CompanyLocalityResponseData $data
 */
final class CompanyLocalityResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyLocalityResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
