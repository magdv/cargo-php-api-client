<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные маршрута из титула отправителя
 * source: simple-document/objects/payload-chunk-points.json
 *
 * @property int $storagePointId
 * @property string $type
 * @property string $fromDate
 * @property string $fromTime
 * @property string $toDate
 * @property string $toTime
 * @property string $address
 * @property string $house
 * @property string $localityName
 * @property string $location
 * @property string $comment
 * @property string[] $contacts
 * @property string $additionalInfo
 * @property string $date
 * @property string $pointShipperLastName
 * @property string $pointShipperFirstName
 * @property string $pointShipperSecondName
 * @property string $pointShipperAddress
 * @property string[] $phones
 * @property int $legalStatus
 * @property string $companyName
 * @property string $inn
 * @property string $taxpayerId
 * @property string $countryCode
 * @property string $documentType
 * @property string $documentNumber
 * @property string $documentDate
 */
final class PayloadChunkPoints extends AbstractEntity
{
    protected static $types = [
        'storagePointId' => ['int'],
        'type' => ['string'],
        'fromDate' => ['string'],
        'fromTime' => ['string'],
        'toDate' => ['string'],
        'toTime' => ['string'],
        'address' => ['string'],
        'house' => ['string'],
        'localityName' => ['string'],
        'location' => ['string'],
        'comment' => ['string'],
        'contacts' => ['array', 'string'],
        'additionalInfo' => ['string'],
        'date' => ['string'],
        'pointShipperLastName' => ['string'],
        'pointShipperFirstName' => ['string'],
        'pointShipperSecondName' => ['string'],
        'pointShipperAddress' => ['string'],
        'phones' => ['array', 'string'],
        'legalStatus' => ['int'],
        'companyName' => ['string'],
        'inn' => ['string'],
        'taxpayerId' => ['string'],
        'countryCode' => ['string'],
        'documentType' => ['string'],
        'documentNumber' => ['string'],
        'documentDate' => ['string'],
    ];

    protected static $nullables = [
        'storagePointId' => false,
        'type' => false,
        'fromDate' => false,
        'fromTime' => false,
        'toDate' => false,
        'toTime' => false,
        'address' => false,
        'house' => false,
        'localityName' => false,
        'location' => false,
        'comment' => false,
        'contacts' => false,
        'additionalInfo' => false,
        'date' => false,
        'pointShipperLastName' => false,
        'pointShipperFirstName' => false,
        'pointShipperSecondName' => false,
        'pointShipperAddress' => false,
        'phones' => false,
        'legalStatus' => false,
        'companyName' => false,
        'inn' => false,
        'taxpayerId' => false,
        'countryCode' => false,
        'documentType' => false,
        'documentNumber' => false,
        'documentDate' => false,
    ];
}
