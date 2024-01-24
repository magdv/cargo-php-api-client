<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Registration\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с информацией о процессе регистрации
 * source: registration/responses/reg.json
 *
 * @property RegData $data
 */
final class Reg extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Registration\Responses\RegData']];
    protected static $nullables = ['data' => false];
}
