<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/company-car-park.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Компания перевозчика
 * source: company/objects/company-car-park.json
 *
 * @property string $id
 * @property CarPark $carPark
 */
final class CompanyCarPark extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'carPark' => ['Cargomart\ApiClient\Entity\Company\Objects\CarPark']];
    protected static $nullables = ['id' => false, 'carPark' => false];
}
