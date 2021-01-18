<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Models;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderTemplateAdminAccess;

/**
 * Шаблон предзаказа
 * source: manage/pre-order/models/pre-order-template-admin.json
 *
 * @property int $id
 * @property string $consignorId
 * @property string $departure
 * @property string $destination
 * @property int $cargoWeight
 * @property int $cargoCapacity
 * @property int $truckTypeId
 * @property int[] $loadingTypeIds
 * @property PreOrderTemplateAdminAccess $access
 */
final class PreOrderTemplateAdmin extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'consignorId' => ['string'],
        'departure' => ['string'],
        'destination' => ['string'],
        'cargoWeight' => ['int'],
        'cargoCapacity' => ['int'],
        'truckTypeId' => ['int'],
        'loadingTypeIds' => ['array', 'int'],
        'access' => ['Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderTemplateAdminAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'consignorId' => false,
        'departure' => false,
        'destination' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'truckTypeId' => false,
        'loadingTypeIds' => false,
        'access' => false,
    ];
}
