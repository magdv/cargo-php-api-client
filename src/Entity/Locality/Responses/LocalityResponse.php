<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: locality/responses/locality-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Locality\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ на запрос поиска по КЛАДРу
 * source: locality/responses/locality-response.json
 *
 * @property MessageV2[] $message
 * @property LocalityResponseData $data
 */
final class LocalityResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Locality\Responses\LocalityResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
