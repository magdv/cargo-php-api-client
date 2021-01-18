<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Locality\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * элемент КЛАДРа
 * source: locality/objects/locality.json
 *
 * @property string $id
 * @property string $name
 * @property string $type
 * @property string $typeShort
 * @property int $level
 * @property bool $isSettlement
 * @property string $fullName
 * @property string $shortName
 * @property string $country
 * @property string $region
 * @property bool $isDisabled
 * @property string $sectionId
 * @property LocalityCoordinates $coordinates
 */
final class Locality extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'name' => ['string'],
        'type' => ['string'],
        'typeShort' => ['string'],
        'level' => ['int'],
        'isSettlement' => ['bool'],
        'fullName' => ['string'],
        'shortName' => ['string'],
        'country' => ['string'],
        'region' => ['string'],
        'isDisabled' => ['bool'],
        'sectionId' => ['string'],
        'coordinates' => ['Cargomart\ApiClient\Entity\Locality\Objects\LocalityCoordinates'],
    ];

    protected static $nullables = [
        'id' => false,
        'name' => false,
        'type' => false,
        'typeShort' => false,
        'level' => false,
        'isSettlement' => false,
        'fullName' => false,
        'shortName' => false,
        'country' => false,
        'region' => false,
        'isDisabled' => false,
        'sectionId' => false,
        'coordinates' => false,
    ];
}
