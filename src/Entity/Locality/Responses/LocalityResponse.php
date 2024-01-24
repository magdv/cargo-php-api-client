<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Locality\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ на запрос поиска по КЛАДРу
 * source: locality/responses/locality-response.json
 *
 * @property LocalityResponseData $data
 */
final class LocalityResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Locality\Responses\LocalityResponseData']];
    protected static $nullables = ['data' => false];
}
