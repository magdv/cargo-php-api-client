<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Enums;

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
 * source: order/enums/ecn-group-status.json
 */
final class EcnGroupStatus extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
