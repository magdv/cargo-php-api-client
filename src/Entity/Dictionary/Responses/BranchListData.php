<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/responses/branch-list.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Dictionary\Objects\BranchItem;

/**
 * Информация по филиалам
 * source: dictionary/responses/branch-list.json#/properties/data
 *
 * @property BranchItem[] $branch
 */
final class BranchListData extends AbstractEntity
{
    protected static $types = ['branch' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\BranchItem']];
    protected static $nullables = ['branch' => false];
}
