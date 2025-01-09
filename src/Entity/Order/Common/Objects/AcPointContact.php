<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект контакта маршрутной точки
 * source: order/Common/objects/ac-point-contact.json
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
