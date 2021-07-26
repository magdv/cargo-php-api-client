<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация по выданному сертификату
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
    ];
}
