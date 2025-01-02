<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Stats\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Уровень точности расчётов: high - в расчёт берём только заявки КДВ с такими же маршрутными точками и без перевозок БТФ, количеством не менее 5 заявок; medium - в расчёт берём заявки КДВ (при наличии) и заявки сторонних клиентов в границах тех же самых населенных пунктов, без перевозок БТФ, количеством не менее 5 заявок; low - в расчёт берём заявки КДВ (при наличии) и заявки сторонних клиентов в границах тех же самых населенных пунктов с учетом перевозок БТФ, количеством не менее 5 заявок
 * source: stats/enums/StatsPrecisionEnum.json
 */
final class StatsPrecisionEnum extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
