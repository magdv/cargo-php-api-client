<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/requirement.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Требования отправителя
 * source: company/objects/requirement.json
 *
 * @property int[] $truckTypeIds
 * @property string $cargoDescription
 * @property string $cargoCondition
 * @property RequirementAccess $access
 */
final class Requirement extends AbstractEntity
{
    protected static $types = [
        'truckTypeIds' => ['array', 'int'],
        'cargoDescription' => ['string'],
        'cargoCondition' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Company\Objects\RequirementAccess'],
    ];

    protected static $nullables = [
        'truckTypeIds' => false,
        'cargoDescription' => false,
        'cargoCondition' => false,
        'access' => false,
    ];
}
