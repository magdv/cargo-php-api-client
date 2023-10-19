<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект, описывающий населённый пункт, город, район региона или регион в иерархии адреса
 * source: base/address-item.json
 *
 * @property string $garGuid
 * @property string $kladrCode
 * @property string $type
 * @property string $shortType
 * @property string $name
 */
final class AddressItem extends AbstractEntity
{
    protected static $types = [
        'garGuid' => ['string'],
        'kladrCode' => ['string'],
        'type' => ['string'],
        'shortType' => ['string'],
        'name' => ['string'],
    ];

    protected static $nullables = [
        'garGuid' => false,
        'kladrCode' => false,
        'type' => false,
        'shortType' => false,
        'name' => false,
    ];
}
