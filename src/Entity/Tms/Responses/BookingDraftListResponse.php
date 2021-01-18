<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список черновиков
 * source: tms/responses/booking-draft-list-response.json
 *
 * @property MessageV2[] $message
 * @property BookingDraftListResponseData $data
 */
final class BookingDraftListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tms\Responses\BookingDraftListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
