<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Tms\Objects\TmsInputElement;

/**
 * Запрос на добавление / обновление данных по свободным машинам из TMS
 * source: tms/requests/tms-input.json
 *
 * @property TmsInputElement[] $data
 */
final class TmsInput extends AbstractEntity
{
    protected static $types = ['data' => ['array', 'Cargomart\ApiClient\Entity\Tms\Objects\TmsInputElement']];
    protected static $nullables = ['data' => false];
}
