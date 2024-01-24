<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ со статусом партнёрства
 * source: company/responses/partner-status-response.json
 *
 * @property PartnerStatusResponseData $data
 */
final class PartnerStatusResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\PartnerStatusResponseData']];
    protected static $nullables = ['data' => false];
}
