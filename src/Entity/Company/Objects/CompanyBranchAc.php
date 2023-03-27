<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/company-branch-ac.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\IdName;

/**
 * Дочерняя компания с информацией о головной
 * source: company/objects/company-branch-ac.json
 *
 * @property int $id
 * @property string $shortName
 * @property string $inn
 * @property string $role
 * @property float $statusId
 * @property bool $isMain
 * @property CompanyBranchChild[] $branch
 * @property IdName $parent
 */
final class CompanyBranchAc extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'shortName' => ['string'],
        'inn' => ['string'],
        'role' => ['string'],
        'statusId' => ['float'],
        'isMain' => ['bool'],
        'branch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranchChild'],
        'parent' => ['Cargomart\ApiClient\Entity\Base\IdName'],
    ];

    protected static $nullables = [
        'id' => false,
        'shortName' => false,
        'inn' => false,
        'role' => false,
        'statusId' => false,
        'isMain' => false,
        'branch' => false,
        'parent' => false,
    ];
}
