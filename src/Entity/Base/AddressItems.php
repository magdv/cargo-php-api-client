<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: base/address.json#/properties/items
 *
 * @property AddressItem $region
 * @property AddressItem $area
 * @property AddressItem $city
 * @property AddressItem $cityDistrict
 * @property AddressItem $settlement
 * @property AddressItem $street
 * @property AddressItem $stead
 * @property AddressItem $house
 * @property AddressItem $block
 */
final class AddressItems extends AbstractEntity
{
    protected static $types = [
        'region' => ['Cargomart\ApiClient\Entity\Base\AddressItem'],
        'area' => ['Cargomart\ApiClient\Entity\Base\AddressItem'],
        'city' => ['Cargomart\ApiClient\Entity\Base\AddressItem'],
        'cityDistrict' => ['Cargomart\ApiClient\Entity\Base\AddressItem'],
        'settlement' => ['Cargomart\ApiClient\Entity\Base\AddressItem'],
        'street' => ['Cargomart\ApiClient\Entity\Base\AddressItem'],
        'stead' => ['Cargomart\ApiClient\Entity\Base\AddressItem'],
        'house' => ['Cargomart\ApiClient\Entity\Base\AddressItem'],
        'block' => ['Cargomart\ApiClient\Entity\Base\AddressItem'],
    ];

    protected static $nullables = [
        'region' => false,
        'area' => false,
        'city' => false,
        'cityDistrict' => false,
        'settlement' => false,
        'street' => false,
        'stead' => false,
        'house' => false,
        'block' => false,
    ];
}
