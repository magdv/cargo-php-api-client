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
 * Условия партнёрства
 * source: company/responses/partner-conditions-response.json
 *
 * @property MessageV2[] $message
 * @property PartnerConditionsResponseData $data
 */
final class PartnerConditionsResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\PartnerConditionsResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
