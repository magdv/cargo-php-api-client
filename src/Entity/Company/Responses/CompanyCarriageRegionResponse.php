<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Области перевозок
 * source: company/responses/company-carriage-region-response.json
 *
 * @property CompanyCarriageRegionResponseData $data
 */
final class CompanyCarriageRegionResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyCarriageRegionResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
