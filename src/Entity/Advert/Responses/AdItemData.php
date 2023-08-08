<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Advert\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Advert\Objects\Ad;

/**
 * source: advert/responses/ad-item.json#/properties/data
 *
 * @property Ad $ad
 */
final class AdItemData extends AbstractEntity
{
    protected static $types = ['ad' => ['Cargomart\ApiClient\Entity\Advert\Objects\Ad']];
    protected static $nullables = ['ad' => false];
}
