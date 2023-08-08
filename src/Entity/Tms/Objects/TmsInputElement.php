<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные по свободным машинам, элемент списка для сохранения в БД, приходящий от TMS
 * source: tms/objects/tms-input-element.json
 *
 * @property TmsInputElementRoute $route
 * @property TmsInputElementAvailability[] $availability
 */
final class TmsInputElement extends AbstractEntity
{
    protected static $types = [
        'route' => ['Cargomart\ApiClient\Entity\Tms\Objects\TmsInputElementRoute'],
        'availability' => ['array', 'Cargomart\ApiClient\Entity\Tms\Objects\TmsInputElementAvailability'],
    ];

    protected static $nullables = ['route' => false, 'availability' => false];
}
