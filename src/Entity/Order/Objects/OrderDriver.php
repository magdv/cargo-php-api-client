<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Objects\DriverAppDetail;

/**
 * Данные водителя в заказе
 * source: order/objects/order-driver.json
 *
 * @property int $driverId
 * @property string $name
 * @property string[] $phones
 * @property string $licenseNumber
 * @property string $licenseSeries
 * @property string $licenseType
 * @property string $licenceIssueDate
 * @property string $inn
 * @property string $externalId
 * @property string $passportType
 * @property string $registrationAddress
 * @property string $passportSeries
 * @property string $passportNumber
 * @property string $passportWhen
 * @property string $passportBy
 * @property string $birthDate
 * @property string $driverAppStatus
 * @property DriverAppDetail[] $driverAppDetail
 */
final class OrderDriver extends AbstractEntity
{
    protected static $types = [
        'driverId' => ['int'],
        'name' => ['string'],
        'phones' => ['array', 'string'],
        'licenseNumber' => ['string'],
        'licenseSeries' => ['string'],
        'licenseType' => ['string'],
        'licenceIssueDate' => ['string'],
        'inn' => ['string'],
        'externalId' => ['string'],
        'passportType' => ['string'],
        'registrationAddress' => ['string'],
        'passportSeries' => ['string'],
        'passportNumber' => ['string'],
        'passportWhen' => ['string'],
        'passportBy' => ['string'],
        'birthDate' => ['string'],
        'driverAppStatus' => ['string'],
        'driverAppDetail' => ['array', 'Cargomart\ApiClient\Entity\Base\Objects\DriverAppDetail'],
    ];

    protected static $nullables = [
        'driverId' => false,
        'name' => false,
        'phones' => false,
        'licenseNumber' => false,
        'licenseSeries' => false,
        'licenseType' => false,
        'licenceIssueDate' => false,
        'inn' => false,
        'externalId' => false,
        'passportType' => false,
        'registrationAddress' => false,
        'passportSeries' => false,
        'passportNumber' => false,
        'passportWhen' => false,
        'passportBy' => false,
        'birthDate' => false,
        'driverAppStatus' => false,
        'driverAppDetail' => false,
    ];
}
