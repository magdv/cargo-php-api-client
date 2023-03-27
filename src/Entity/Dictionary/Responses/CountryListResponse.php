<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/responses/country-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список стран
 * source: dictionary/responses/country-list-response.json
 *
 * @property MessageV2[] $message
 * @property CountryListResponseData $data
 */
final class CountryListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Dictionary\Responses\CountryListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
