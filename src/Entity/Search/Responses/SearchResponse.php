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
 * @property MessageV2[] $message
 * @property SearchResponseData $data
 */
final class SearchResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Search\Responses\SearchResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
