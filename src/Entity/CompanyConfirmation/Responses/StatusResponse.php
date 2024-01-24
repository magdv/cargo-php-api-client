<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ валидации
 * source: company-confirmation/responses/status-response.json
 *
 * @property StatusResponseData $data
 */
final class StatusResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\StatusResponseData']];
    protected static $nullables = ['data' => false];
}
