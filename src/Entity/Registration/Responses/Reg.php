<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: registration/responses/reg.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Registration\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с информацией о процессе регистрации
 * source: registration/responses/reg.json
 *
 * @property MessageV2[] $message
 * @property RegData $data
 */
final class Reg extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Registration\Responses\RegData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
