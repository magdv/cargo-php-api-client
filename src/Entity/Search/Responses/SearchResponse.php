<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Search\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с результатами глобального поиска
 * source: search/responses/search-response.json
 *
 * @property SearchResponseData $data
 */
final class SearchResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Search\Responses\SearchResponseData']];
    protected static $nullables = ['data' => false];
}
