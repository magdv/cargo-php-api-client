<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Trailer\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список тягачей и прицепов
 * source: trailer/responses/trailer-list-response.json
 *
 * @property TrailerListResponseData $data
 */
final class TrailerListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Trailer\Responses\TrailerListResponseData']];
    protected static $nullables = ['data' => false];
}
