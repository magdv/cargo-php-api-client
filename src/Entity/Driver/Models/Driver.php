<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Models;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Driver\Objects\DriverAccess;

/**
 * Запись информации о водителе
 * source: driver/models/driver.json
 *
 * @property int $id
 * @property string $externalId
 * @property string $name
 * @property string $birthDate
 * @property string $phone
 * @property string[] $phones
 * @property string $passportNumber
 * @property string $passportIssueDate
 * @property string $passportIssueBy
 * @property string $passportType
 * @property string $registrationAddress
 * @property string $licenceNumber
 * @property string $licenceIssueDate
 * @property int $validationStatus
 * @property string $driverAppStatus
 * @property DriverDriverAppDetail[] $driverAppDetail
 * @property DriverAccess $access
 */
final class Driver extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'externalId' => ['string'],
        'name' => ['string'],
        'birthDate' => ['string'],
        'phone' => ['string'],
        'phones' => ['array', 'string'],
        'passportNumber' => ['string'],
        'passportIssueDate' => ['string'],
        'passportIssueBy' => ['string'],
        'passportType' => ['string'],
        'registrationAddress' => ['string'],
        'licenceNumber' => ['string'],
        'licenceIssueDate' => ['string'],
        'validationStatus' => ['int'],
        'driverAppStatus' => ['string'],
        'driverAppDetail' => ['array', 'Cargomart\ApiClient\Entity\Driver\Models\DriverDriverAppDetail'],
        'access' => ['Cargomart\ApiClient\Entity\Driver\Objects\DriverAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'externalId' => false,
        'name' => false,
        'birthDate' => false,
        'phone' => false,
        'phones' => false,
        'passportNumber' => false,
        'passportIssueDate' => false,
        'passportIssueBy' => false,
        'passportType' => false,
        'registrationAddress' => false,
        'licenceNumber' => false,
        'licenceIssueDate' => false,
        'validationStatus' => false,
        'driverAppStatus' => false,
        'driverAppDetail' => false,
        'access' => false,
    ];
}
