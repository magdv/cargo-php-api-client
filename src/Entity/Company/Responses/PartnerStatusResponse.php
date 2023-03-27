<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/partner-status-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ со статусом партнёрства
 * source: company/responses/partner-status-response.json
 *
 * @property MessageV2[] $message
 * @property PartnerStatusResponseData $data
 */
final class PartnerStatusResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\PartnerStatusResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
