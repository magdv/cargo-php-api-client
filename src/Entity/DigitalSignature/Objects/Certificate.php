<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: digital-signature/objects/certificate.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * @deprecated Информация по выданному сертификату
 * source: digital-signature/objects/certificate.json
 *
 * @property string $certificateId
 * @property int $certificateNumber
 * @property string $signerName
 * @property bool $isActive
 * @property string $status
 * @property int $clientId
 * @property string $createDate
 * @property string $endDate
 * @property string $recallDate
 * @property string $url
 */
final class Certificate extends AbstractEntity
{
    protected static $types = [
        'certificateId' => ['string'],
        'certificateNumber' => ['int'],
        'signerName' => ['string'],
        'isActive' => ['bool'],
        'status' => ['string'],
        'clientId' => ['int'],
        'createDate' => ['string'],
        'endDate' => ['string'],
        'recallDate' => ['string'],
        'url' => ['string'],
    ];

    protected static $nullables = [
        'certificateId' => false,
        'certificateNumber' => false,
        'signerName' => false,
        'isActive' => false,
        'status' => false,
        'clientId' => false,
        'createDate' => false,
        'endDate' => false,
        'recallDate' => false,
        'url' => false,
    ];
}
