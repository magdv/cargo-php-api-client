<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderGroupAdmin;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderTemplateAdmin;

/**
 * source: manage/pre-order/responses/pre-order-group-response.json#/properties/data
 *
 * @property PreOrderGroupAdmin $preOrderGroupAdmin
 * @property PreOrderTemplateAdmin[] $preOrderTemplateAdmin
 * @property Locality[] $locality
 */
final class PreOrderGroupResponseData extends AbstractEntity
{
    protected static $types = [
        'preOrderGroupAdmin' => ['Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderGroupAdmin'],
        'preOrderTemplateAdmin' => ['array', 'Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderTemplateAdmin'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
    ];

    protected static $nullables = ['preOrderGroupAdmin' => false, 'preOrderTemplateAdmin' => false, 'locality' => false];
}
