<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/objects/tender-lot-carriage.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о требованиях к перевозке
 * source: tender/objects/tender-lot-carriage.json
 *
 * @property float $volume
 * @property string $unit
 */
final class TenderLotCarriage extends AbstractEntity
{
    protected static $types = ['volume' => ['float'], 'unit' => ['string']];
    protected static $nullables = ['volume' => false, 'unit' => false];
}
