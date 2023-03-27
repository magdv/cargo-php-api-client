<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: trailer/responses/trailer-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Trailer\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список тягачей и прицепов
 * source: trailer/responses/trailer-list-response.json
 *
 * @property MessageV2[] $message
 * @property TrailerListResponseData $data
 */
final class TrailerListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Trailer\Responses\TrailerListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
