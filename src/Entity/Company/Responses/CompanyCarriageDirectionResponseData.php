<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-carriage-direction-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;

/**
 * Common response data
 * source: company/responses/company-carriage-direction-response.json#/properties/data
 *
 * @property CompanyCarriageDirectionResponseDataCompany $company
 * @property Locality[] $locality
 */
final class CompanyCarriageDirectionResponseData extends AbstractEntity
{
    protected static $types = [
        'company' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyCarriageDirectionResponseDataCompany'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
    ];

    protected static $nullables = ['company' => false, 'locality' => false];
}
