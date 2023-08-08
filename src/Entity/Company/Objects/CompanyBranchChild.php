<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Простой объект дочерней компании
 * source: company/objects/company-branch-child.json
 *
 * @property int $id
 * @property string $shortName
 * @property string $inn
 */
final class CompanyBranchChild extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'shortName' => ['string'], 'inn' => ['string']];
    protected static $nullables = ['id' => false, 'shortName' => false, 'inn' => false];
}
