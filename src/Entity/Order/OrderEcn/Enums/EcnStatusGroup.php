<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderEcn\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Обобщенный статус с учетом Логистики(
 *
 *  on_the_way - Перевозка,
 *
 *  loading - Погрузка,
 *
 *  unloading - Выгрузка,
 *
 *  complete - Документооборот завершен)
 * source: order/OrderEcn/enums/ecn-status-group.json
 */
final class EcnStatusGroup extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
