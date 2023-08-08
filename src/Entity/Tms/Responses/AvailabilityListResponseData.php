<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Tms\Objects\AvailabilityItem;

/**
 * source: tms/responses/availability-list-response.json#/properties/data
 *
 * @property AvailabilityItem[] $items
 * @property CompanyShort[] $company
 */
final class AvailabilityListResponseData extends AbstractEntity
{
    protected static $types = [
        'items' => ['array', 'Cargomart\ApiClient\Entity\Tms\Objects\AvailabilityItem'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
    ];

    protected static $nullables = ['items' => false, 'company' => false];
}
