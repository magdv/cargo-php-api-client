<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Успешный ответ
 * source: tms/responses/reception-response.json
 *
 * @property MessageV2[] $message
 * @property ReceptionResponseData $data
 */
final class ReceptionResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tms\Responses\ReceptionResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
