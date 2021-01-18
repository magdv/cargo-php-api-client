<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderGroupAdmin;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderTemplateAdmin;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderTemplateAdminListItem;

/**
 * source: manage/pre-order/responses/pre-order-group-list-response.json#/properties/data
 *
 * @property PreOrderTemplateAdminListItem[] $listItems
 * @property PreOrderGroupAdmin[] $preOrderGroupAdmin
 * @property PreOrderTemplateAdmin[] $preOrderTemplateAdmin
 * @property Locality[] $locality
 * @property Pagination $pagination
 */
final class PreOrderGroupListResponseData extends AbstractEntity
{
    protected static $types = [
        'listItems' => ['array', 'Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderTemplateAdminListItem'],
        'preOrderGroupAdmin' => ['array', 'Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderGroupAdmin'],
        'preOrderTemplateAdmin' => ['array', 'Cargomart\ApiClient\Entity\Manage\PreOrder\Models\PreOrderTemplateAdmin'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = [
        'listItems' => false,
        'preOrderGroupAdmin' => false,
        'preOrderTemplateAdmin' => false,
        'locality' => false,
        'pagination' => false,
    ];
}
