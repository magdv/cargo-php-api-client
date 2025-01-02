<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Документ
 * source: order/Common/objects/waybill-document.json
 *
 * @property string $name
 * @property string $number
 * @property string $date
 */
final class WaybillDocument extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'number' => ['string'], 'date' => ['string']];
    protected static $nullables = ['name' => false, 'number' => false, 'date' => false];
}
