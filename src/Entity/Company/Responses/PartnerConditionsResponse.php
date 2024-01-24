<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Условия партнёрства
 * source: company/responses/partner-conditions-response.json
 *
 * @property PartnerConditionsResponseData $data
 */
final class PartnerConditionsResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\PartnerConditionsResponseData']];
    protected static $nullables = ['data' => false];
}
