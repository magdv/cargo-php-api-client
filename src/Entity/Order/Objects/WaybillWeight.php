<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Масса груза, кг
 * source: order/objects/waybill-weight.json
 *
 * @property string $brutto
 * @property string $netto
 */
final class WaybillWeight extends AbstractEntity
{
    protected static $types = ['brutto' => ['string'], 'netto' => ['string']];
    protected static $nullables = ['brutto' => false, 'netto' => false];
}
