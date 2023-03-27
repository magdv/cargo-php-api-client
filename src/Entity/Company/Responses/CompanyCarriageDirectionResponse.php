<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-carriage-direction-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Направления перевозок отправителя
 * source: company/responses/company-carriage-direction-response.json
 *
 * @property MessageV2[] $message
 * @property CompanyCarriageDirectionResponseData $data
 */
final class CompanyCarriageDirectionResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyCarriageDirectionResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
