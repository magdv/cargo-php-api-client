<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/responses/exists-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с пометкой существования данных
 * source: base/responses/exists-response.json
 *
 * @property MessageV2[] $message
 * @property ExistsResponseData $data
 */
final class ExistsResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Base\Responses\ExistsResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
