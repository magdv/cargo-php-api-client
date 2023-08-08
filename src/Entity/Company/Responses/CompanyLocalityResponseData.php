<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;

/**
 * source: company/responses/company-locality-response.json#/properties/data
 *
 * @property Locality[] $locality
 */
final class CompanyLocalityResponseData extends AbstractEntity
{
    protected static $types = ['locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality']];
    protected static $nullables = ['locality' => false];
}
