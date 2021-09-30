<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект запроса количества машин
 * source: order/objects/order-offer-car-request.json
 *
 * @property \stdClass $count
 * @property \stdClass $unit
 */
final class OrderOfferCarRequest extends AbstractEntity
{
    protected static $types = ['count' => ['\stdClass'], 'unit' => ['\stdClass']];
    protected static $nullables = ['count' => true, 'unit' => true];
}
