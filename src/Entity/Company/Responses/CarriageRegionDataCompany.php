<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CarriageRegion;

/**
 * Компания перевозчика
 * source: company/responses/company-carriage-region-response.json#/properties/data#/properties/company
 *
 * @property string $id
 * @property CarriageRegion $carriageRegion
 */
final class CarriageRegionDataCompany extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'carriageRegion' => ['Cargomart\ApiClient\Entity\Company\Objects\CarriageRegion'],
    ];

    protected static $nullables = ['id' => false, 'carriageRegion' => false];
}
