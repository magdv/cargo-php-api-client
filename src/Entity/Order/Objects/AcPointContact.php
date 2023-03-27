<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/ac-point-contact.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект контакта маршрутной точки
 * source: order/objects/ac-point-contact.json
 *
 * @property string $contactName
 * @property string $contactPhone
 * @property string $contactExt
 */
final class AcPointContact extends AbstractEntity
{
    protected static $types = ['contactName' => ['string'], 'contactPhone' => ['string'], 'contactExt' => ['string']];
    protected static $nullables = ['contactName' => false, 'contactPhone' => false, 'contactExt' => false];
}
