<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/objects/tender-lot-point.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Точка маршрута тендера
 * source: tender/objects/tender-lot-point.json
 *
 * @property string $locationCode
 */
final class TenderLotPoint extends AbstractEntity
{
    protected static $types = ['locationCode' => ['string']];
    protected static $nullables = ['locationCode' => false];
}
