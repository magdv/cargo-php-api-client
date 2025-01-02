<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Грузополучатель/Грузоотправитель/Экспедитор/Перевозчик
 * source: order/OrderActNonDeliveryCar/objects/DigitalActNonDeliveryCarCompany.json
 *
 * @property string $name
 * @property string $inn
 */
final class DigitalActNonDeliveryCarCompany extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'inn' => ['string']];
    protected static $nullables = ['name' => false, 'inn' => false];
}
