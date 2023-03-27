<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/car-park-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyCarPark;

/**
 * source: company/responses/car-park-response.json#/properties/data
 *
 * @property CompanyCarPark $company
 */
final class CarParkResponseData extends AbstractEntity
{
    protected static $types = ['company' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyCarPark']];
    protected static $nullables = ['company' => false];
}
