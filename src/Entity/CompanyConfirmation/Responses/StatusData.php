<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyConfirmation;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\DocumentTypeShort;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\File;
use Cargomart\ApiClient\Entity\Dictionary\Objects\ActivityType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\Country;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TaxSystem;

/**
 * source: company-confirmation/responses/status.json#/properties/data
 *
 * @property CompanyConfirmation $validation
 * @property DocumentTypeShort[] $documentType
 * @property TaxSystem[] $taxSystem
 * @property Country[] $country
 * @property File[] $file
 * @property ActivityType[] $activityType
 */
final class StatusData extends AbstractEntity
{
    protected static $types = [
        'validation' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyConfirmation'],
        'documentType' => ['array', 'Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\DocumentTypeShort'],
        'taxSystem' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TaxSystem'],
        'country' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\Country'],
        'file' => ['array', 'Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\File'],
        'activityType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\ActivityType'],
    ];

    protected static $nullables = [
        'validation' => false,
        'documentType' => false,
        'taxSystem' => false,
        'country' => false,
        'file' => false,
        'activityType' => false,
    ];
}
