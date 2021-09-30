<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Partner\Response;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с сообщением о партнерстве
 * source: partner/response/partner-message-response.json
 *
 * @property MessageV2[] $message
 * @property PartnerMessageData $data
 */
final class PartnerMessage extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Partner\Response\PartnerMessageData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
