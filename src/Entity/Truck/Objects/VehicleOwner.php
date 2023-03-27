<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: truck/objects/vehicle-owner.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные о владельце
 * source: truck/objects/vehicle-owner.json
 *
 * @property string $documentNumber
 * @property string $documentDate
 * @property string $countryCode
 * @property string $inn
 * @property string $taxId
 */
final class VehicleOwner extends AbstractEntity
{
    protected static $types = [
        'documentNumber' => ['string'],
        'documentDate' => ['string'],
        'countryCode' => ['string'],
        'inn' => ['string'],
        'taxId' => ['string'],
    ];

    protected static $nullables = [
        'documentNumber' => false,
        'documentDate' => false,
        'countryCode' => false,
        'inn' => false,
        'taxId' => false,
    ];
}
