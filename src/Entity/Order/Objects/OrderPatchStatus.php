<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статус запроса на изменение заказа(1 - ожидает подтверждение от отправителя, 2 - ожидает подтверждения от перевозчика, 3 - принят ввсеми сторонами, 4 - отозван экспедитором до согласования с перевозчиком, 5 - отклонен отправителем, 6 - отклонен перевозчиком, 7 - отозвано экспедитором до согласования с заказчиком)
 * source: order/objects/order-patch-status.json
 */
final class OrderPatchStatus extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
