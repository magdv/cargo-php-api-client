<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tms/responses/booking-draft-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Успешный ответ
 * source: tms/responses/booking-draft-response.json
 *
 * @property MessageV2[] $message
 * @property BookingDraftResponseData $data
 */
final class BookingDraftResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tms\Responses\BookingDraftResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
