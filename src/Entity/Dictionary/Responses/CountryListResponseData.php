<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Dictionary\Objects\CountryItem;

/**
 * Список стран
 * source: dictionary/responses/country-list-response.json#/properties/data
 *
 * @property CountryItem[] $country
 * @property Pagination $pagination
 */
final class CountryListResponseData extends AbstractEntity
{
    protected static $types = [
        'country' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\CountryItem'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['country' => false, 'pagination' => false];
}
