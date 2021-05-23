<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные водителя в заказе
 * source: expeditor/objects/proposal-driver.json
 *
 * @property int $driverId
 * @property string $name
 * @property string[] $phones
 * @property string $licenseNumber
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
        'passportSeries' => ['string'],
        'passportNumber' => ['string'],
        'passportWhen' => ['string'],
        'passportBy' => ['string'],
        'birthDate' => ['string'],
        'driverAppStatus' => ['string'],
        'driverAppDetail' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalDriverDriverAppDetail'],
    ];

    protected static $nullables = [
        'driverId' => false,
        'name' => false,
        'phones' => false,
        'licenseNumber' => false,
        'passportSeries' => false,
        'passportNumber' => false,
        'passportWhen' => false,
        'passportBy' => false,
        'birthDate' => false,
        'driverAppStatus' => false,
        'driverAppDetail' => false,
    ];
}
