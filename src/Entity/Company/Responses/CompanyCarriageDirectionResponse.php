<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Направления перевозок отправителя
 * source: company/responses/company-carriage-direction-response.json
 *
 * @property CompanyCarriageDirectionResponseData $data
 */
final class CompanyCarriageDirectionResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyCarriageDirectionResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
