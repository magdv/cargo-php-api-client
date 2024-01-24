<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Partner\Response;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с сообщением о партнерстве
 * source: partner/response/partner-message-response.json
 *
 * @property PartnerMessageResponseData $data
 */
final class PartnerMessageResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Partner\Response\PartnerMessageResponseData']];
    protected static $nullables = ['data' => false];
}
