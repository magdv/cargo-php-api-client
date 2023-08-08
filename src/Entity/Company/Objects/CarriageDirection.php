<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Направления перевозок компании-отправителя
 * source: company/objects/carriage-direction.json
 *
 * @property string[] $departure
 * @property string[] $destination
 * @property CarriageDirectionAccess $access
 */
final class CarriageDirection extends AbstractEntity
{
    protected static $types = [
        'departure' => ['array', 'string'],
        'destination' => ['array', 'string'],
        'access' => ['Cargomart\ApiClient\Entity\Company\Objects\CarriageDirectionAccess'],
    ];

    protected static $nullables = ['departure' => false, 'destination' => false, 'access' => false];
}
