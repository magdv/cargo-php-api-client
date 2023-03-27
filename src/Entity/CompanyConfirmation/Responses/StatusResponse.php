<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company-confirmation/responses/status-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ валидации
 * source: company-confirmation/responses/status-response.json
 *
 * @property MessageV2[] $message
 * @property StatusResponseData $data
 */
final class StatusResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\StatusResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
