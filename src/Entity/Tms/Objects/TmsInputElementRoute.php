<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\CoordinateRadius;

/**
 * Параметры маршрута
 * source: tms/objects/tms-input-element.json#/properties/route
 *
 * @property string $routeId
 * @property CoordinateRadius $departure
 * @property CoordinateRadius $destination
 */
final class TmsInputElementRoute extends AbstractEntity
{
    protected static $types = [
        'routeId' => ['string'],
        'departure' => ['Cargomart\ApiClient\Entity\Base\CoordinateRadius'],
        'destination' => ['Cargomart\ApiClient\Entity\Base\CoordinateRadius'],
    ];

    protected static $nullables = ['routeId' => false, 'departure' => false, 'destination' => false];
}
