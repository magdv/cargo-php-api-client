<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные водителя в заказе
 * source: expeditor/Common/objects/proposal-driver.json
 *
 * @property int $driverId
 * @property string $name
 * @property string[] $phones
 * @property string $licenseNumber
 * @property string $licenceIssueDate
 * @property string $licenseType
 * @property string $licenseSeries
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
 * @property ProposalDriverDriverAppDetail[] $driverAppDetail
 */
final class ProposalDriver extends AbstractEntity
{
    protected static $types = [
        'driverId' => ['int'],
        'name' => ['string'],
        'phones' => ['array', 'string'],
        'licenseNumber' => ['string'],
        'licenceIssueDate' => ['string'],
        'licenseType' => ['string'],
        'licenseSeries' => ['string'],
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
        'driverAppDetail' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalDriverDriverAppDetail'],
    ];

    protected static $nullables = [
        'driverId' => false,
        'name' => false,
        'phones' => false,
        'licenseNumber' => false,
        'licenceIssueDate' => false,
        'licenseType' => false,
        'licenseSeries' => false,
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
