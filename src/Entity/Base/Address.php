<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: base/address.json
 *
 * @property string $countryCode
 * @property string $code
 * @property AddressItems $items
 * @property string $garGuid
 * @property string $osmId
 * @property string $standardizedAddress
 * @property Coordinate $coordinate
 * @property string $postalCode
 * @property string $region
 * @property string $city
 * @property string $settlement
 * @property string $street
 * @property string $house
 * @property string $block
 */
final class Address extends AbstractEntity
{
    protected static $types = [
        'countryCode' => ['string'],
        'code' => ['string'],
        'items' => ['Cargomart\ApiClient\Entity\Base\AddressItems'],
        'garGuid' => ['string'],
        'osmId' => ['string'],
        'standardizedAddress' => ['string'],
        'coordinate' => ['Cargomart\ApiClient\Entity\Base\Coordinate'],
        'postalCode' => ['string'],
        'region' => ['string'],
        'city' => ['string'],
        'settlement' => ['string'],
        'street' => ['string'],
        'house' => ['string'],
        'block' => ['string'],
    ];

    protected static $nullables = [
        'countryCode' => false,
        'code' => false,
        'items' => false,
        'garGuid' => false,
        'osmId' => false,
        'standardizedAddress' => false,
        'coordinate' => false,
        'postalCode' => false,
        'region' => false,
        'city' => false,
        'settlement' => false,
        'street' => false,
        'house' => false,
        'block' => false,
    ];
}
