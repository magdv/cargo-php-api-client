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
 * @property string $kpp
 * @property string $name
 * @property string $address
 */
final class ActualCarrier extends AbstractEntity
{
    protected static $types = ['inn' => ['string'], 'kpp' => ['string'], 'name' => ['string'], 'address' => ['string']];
    protected static $nullables = ['inn' => false, 'kpp' => false, 'name' => false, 'address' => false];
}
