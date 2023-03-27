<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/waybill-date.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Дата события
 * source: order/objects/waybill-date.json
 *
 * @property string $date
 * @property string $time
 */
final class WaybillDate extends AbstractEntity
{
    protected static $types = ['date' => ['string'], 'time' => ['string']];
    protected static $nullables = ['date' => false, 'time' => false];
}
