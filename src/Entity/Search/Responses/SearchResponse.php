<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Search\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с результатами глобального поиска
 * source: search/responses/search-response.json
 *
 * @property SearchResponseData $data
 * @property MessageV2[] $message
 */
final class SearchResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Search\Responses\SearchResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
