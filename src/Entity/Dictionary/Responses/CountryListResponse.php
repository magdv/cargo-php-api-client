<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список стран
 * source: dictionary/responses/country-list-response.json
 *
 * @property CountryListResponseData $data
 */
final class CountryListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Dictionary\Responses\CountryListResponseData']];
    protected static $nullables = ['data' => false];
}
