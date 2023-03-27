<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: search/responses/search-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Search\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Search\Objects\SearchItem;

/**
 * source: search/responses/search-response.json#/properties/data
 *
 * @property SearchItem[] $searchResult
 * @property bool $isNext
 */
final class SearchResponseData extends AbstractEntity
{
    protected static $types = [
        'searchResult' => ['array', 'Cargomart\ApiClient\Entity\Search\Objects\SearchItem'],
        'isNext' => ['bool'],
    ];

    protected static $nullables = ['searchResult' => false, 'isNext' => false];
}
