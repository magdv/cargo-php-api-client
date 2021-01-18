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
use Cargomart\ApiClient\Entity\PreOrder\Objects\PreOrder;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: pre-order/responses/pre-order-item.json#/properties/data
 *
 * @property PreOrder $preOrder
 * @property Locality[] $locality
 * @property CompanyShort[] $company
 * @property TruckType[] $truckType
 * @property LoadingType[] $loadingType
 * @property UserContactShort[] $contact
 */
final class PreOrderItemData extends AbstractEntity
{
    protected static $types = [
        'preOrder' => ['Cargomart\ApiClient\Entity\PreOrder\Objects\PreOrder'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'loadingType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = [
        'preOrder' => false,
        'locality' => false,
        'company' => false,
        'truckType' => false,
        'loadingType' => false,
        'contact' => false,
    ];
}
