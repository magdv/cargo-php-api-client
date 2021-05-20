<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на редактирование водителя
 * source: driver/requests/driver-post-request.json
 *
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
 * @property string $inn
 */
final class DriverPostRequest extends AbstractEntity
{
    protected static $types = [
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
        'inn' => ['string'],
    ];

    protected static $nullables = [
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
        'inn' => false,
    ];
}
