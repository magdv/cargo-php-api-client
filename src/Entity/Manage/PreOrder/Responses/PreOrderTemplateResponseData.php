<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderTemplateAdmin;

/**
 * source: manage/pre-order/responses/pre-order-template-response.json#/properties/data
 *
 * @property PreOrderTemplateAdmin $preOrderTemplateAdmin
 * @property Locality[] $locality
 * @property TruckType[] $truckType
 * @property LoadingType[] $loadingType
 * @property CompanyShort[] $company
 */
final class PreOrderTemplateResponseData extends AbstractEntity
{
    protected static $types = [
        'preOrderTemplateAdmin' => ['Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderTemplateAdmin'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'loadingType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
    ];

    protected static $nullables = [
        'preOrderTemplateAdmin' => false,
        'locality' => false,
        'truckType' => false,
        'loadingType' => false,
        'company' => false,
    ];
}
