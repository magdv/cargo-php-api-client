<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderAdmin;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderTemplateAdmin;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: manage/pre-order/responses/pre-order-list-response.json#/properties/data
 *
 * @property PreOrderAdmin[] $preOrderAdmin
 * @property PreOrderTemplateAdmin[] $preOrderTemplateAdmin
 * @property Locality[] $locality
 * @property TruckType[] $truckType
 * @property LoadingType[] $loadingType
 * @property CompanyShort[] $company
 * @property UserContactShort[] $contact
 * @property Pagination $pagination
 */
final class PreOrderListResponseData extends AbstractEntity
{
    protected static $types = [
        'preOrderAdmin' => ['array', 'Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderAdmin'],
        'preOrderTemplateAdmin' => ['array', 'Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderTemplateAdmin'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'loadingType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = [
        'preOrderAdmin' => false,
        'preOrderTemplateAdmin' => false,
        'locality' => false,
        'truckType' => false,
        'loadingType' => false,
        'company' => false,
        'contact' => false,
        'pagination' => false,
    ];
}
