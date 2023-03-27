<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: storage-point/objects/point-shipper.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Грузополучатель/грузоотправитель
 * source: storage-point/objects/point-shipper.json
 *
 * @property int $legalStatus
 * @property string $companyName
 * @property string $address
 * @property string $inn
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $taxpayerId
 * @property string $countryCode
 * @property string $documentType
 * @property string $documentNumber
 * @property string $documentDate
 */
final class PointShipper extends AbstractEntity
{
    protected static $types = [
        'legalStatus' => ['int'],
        'companyName' => ['string'],
        'address' => ['string'],
        'inn' => ['string'],
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'taxpayerId' => ['string'],
        'countryCode' => ['string'],
        'documentType' => ['string'],
        'documentNumber' => ['string'],
        'documentDate' => ['string'],
    ];

    protected static $nullables = [
        'legalStatus' => false,
        'companyName' => false,
        'address' => false,
        'inn' => false,
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'taxpayerId' => false,
        'countryCode' => false,
        'documentType' => false,
        'documentNumber' => false,
        'documentDate' => false,
    ];
}
