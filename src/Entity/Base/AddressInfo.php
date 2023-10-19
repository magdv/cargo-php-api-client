<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: base/address-info.json
 *
 * @property string $countryCode
 * @property string $code
 * @property string $garGuid
 * @property string $osmId
 * @property string $standardizedAddress
 * @property Coordinate $coordinate
 * @property string $postalCode
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
final class AddressInfo extends AbstractEntity
{
    protected static $types = [
        'countryCode' => ['string'],
        'code' => ['string'],
        'garGuid' => ['string'],
        'osmId' => ['string'],
        'standardizedAddress' => ['string'],
        'coordinate' => ['Cargomart\ApiClient\Entity\Base\Coordinate'],
        'postalCode' => ['string'],
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
        'countryCode' => false,
        'code' => false,
        'garGuid' => false,
        'osmId' => false,
        'standardizedAddress' => false,
        'coordinate' => false,
        'postalCode' => false,
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
