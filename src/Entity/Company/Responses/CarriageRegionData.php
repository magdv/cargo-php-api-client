<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;

/**
 * Common response data
 * source: company/responses/company-carriage-region-response.json#/properties/data
 *
 * @property CarriageRegionDataCompany $company
 * @property Locality[] $locality
 */
final class CarriageRegionData extends AbstractEntity
{
    protected static $types = [
        'company' => ['Cargomart\ApiClient\Entity\Company\Responses\CarriageRegionDataCompany'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
    ];

    protected static $nullables = ['company' => false, 'locality' => false];
}
