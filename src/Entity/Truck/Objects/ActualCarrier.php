<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные организации фактического перевозчика
 * source: truck/objects/actual-carrier.json
 *
 * @property string $inn
 * @property string $name
 * @property string $address
 */
final class ActualCarrier extends AbstractEntity
{
    protected static $types = ['inn' => ['string'], 'name' => ['string'], 'address' => ['string']];
    protected static $nullables = ['inn' => false, 'name' => false, 'address' => false];
}
