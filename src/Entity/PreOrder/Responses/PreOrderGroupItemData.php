<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PreOrder\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\PreOrder\Objects\PreOrderGroup;

/**
 * source: pre-order/responses/pre-order-group-item.json#/properties/data
 *
 * @property PreOrderGroup $preOrderGroup
 * @property Locality[] $locality
 * @property CompanyShort[] $company
 * @property TruckType[] $truckType
 * @property LoadingType[] $loadingType
 */
final class PreOrderGroupItemData extends AbstractEntity
{
    protected static $types = [
        'preOrderGroup' => ['Cargomart\ApiClient\Entity\PreOrder\Objects\PreOrderGroup'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'loadingType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType'],
    ];

    protected static $nullables = [
        'preOrderGroup' => false,
        'locality' => false,
        'company' => false,
        'truckType' => false,
        'loadingType' => false,
    ];
}
