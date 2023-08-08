<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Models;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Driver\Objects\DriverAccess;

/**
 * Старая модель. Пришла из v1. deprecated.
 * source: driver/models/driver-old.json
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string[] $phones
 * @property string $licenseNumber
 * @property string $licenceIssueDate
 * @property string $passportSeries
 * @property string $passportNumber
 * @property string $passportWhen
 * @property string $passportBy
 * @property string $birthDate
 * @property DriverOldDriverLicense[] $driverLicense
 * @property DriverAccess $access
 */
final class DriverOld extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'name' => ['string'],
        'phone' => ['string'],
        'phones' => ['array', 'string'],
        'licenseNumber' => ['string'],
        'licenceIssueDate' => ['string'],
        'passportSeries' => ['string'],
        'passportNumber' => ['string'],
        'passportWhen' => ['string'],
        'passportBy' => ['string'],
        'birthDate' => ['string'],
        'driverLicense' => ['array', 'Cargomart\ApiClient\Entity\Driver\Models\DriverOldDriverLicense'],
        'access' => ['Cargomart\ApiClient\Entity\Driver\Objects\DriverAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'name' => false,
        'phone' => false,
        'phones' => false,
        'licenseNumber' => false,
        'licenceIssueDate' => false,
        'passportSeries' => false,
        'passportNumber' => false,
        'passportWhen' => false,
        'passportBy' => false,
        'birthDate' => false,
        'driverLicense' => false,
        'access' => false,
    ];
}
