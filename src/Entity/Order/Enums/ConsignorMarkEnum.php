<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Отметка грузоотправителя(
 *
 *  no_truck - непредъявление транспортного средства для перевозки груза,
 *
 * problem_due_to_carrier - невывоз груза по вине перевозчика,
 *
 *  late_truck - несвоевременное предоставление транспортного средства,
 *
 *  no_container - несвоевременное предоставление контейнера,
 *
 *  other - иное,
 *
 *  none - без отметки грузоотправителя
 *
 * )
 * source: order/enums/consignor-mark-enum.json
 */
final class ConsignorMarkEnum extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
