<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/responses/container-type-list.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Dictionary\Objects\ContainerTypeItem;

/**
 * Список видов тары
 * source: dictionary/responses/container-type-list.json#/properties/data
 *
 * @property ContainerTypeItem[] $container
 * @property Pagination $pagination
 */
final class ContainerTypeListData extends AbstractEntity
{
    protected static $types = [
        'container' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\ContainerTypeItem'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['container' => false, 'pagination' => false];
}
