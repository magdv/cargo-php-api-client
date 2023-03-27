<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/carriage-region.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Области перевозок
 * source: company/objects/carriage-region.json
 *
 * @property string[] $region
 * @property CarriageRegionAccess $access
 */
final class CarriageRegion extends AbstractEntity
{
    protected static $types = [
        'region' => ['array', 'string'],
        'access' => ['Cargomart\ApiClient\Entity\Company\Objects\CarriageRegionAccess'],
    ];

    protected static $nullables = ['region' => false, 'access' => false];
}
