<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SignedDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\DigitalSignature\Objects\CertificateContract;

/**
 * Объект сертификата ПЭП пользователя-подписанта
 * source: signed-document/objects/SignedDocumentUserCertificate.json
 *
 * @property string $id
 * @property int $number
 * @property string $startDate
 * @property string $endDate
 * @property string $activateDate
 * @property string $branchId
 * @property string $clientName
 * @property string $clientInn
 * @property string $clientOgrn
 * @property string $clientAddress
 * @property string $receiverLastName
 * @property string $receiverFirstName
 * @property string $receiverSecondName
 * @property int $userId
 * @property string $phone
 * @property CertificateContract $contract
 */
final class SignedDocumentUserCertificate extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'number' => ['int'],
        'startDate' => ['string'],
        'endDate' => ['string'],
        'activateDate' => ['string'],
        'branchId' => ['string'],
        'clientName' => ['string'],
        'clientInn' => ['string'],
        'clientOgrn' => ['string'],
        'clientAddress' => ['string'],
        'receiverLastName' => ['string'],
        'receiverFirstName' => ['string'],
        'receiverSecondName' => ['string'],
        'userId' => ['int'],
        'phone' => ['string'],
        'contract' => ['Cargomart\ApiClient\Entity\DigitalSignature\Objects\CertificateContract'],
    ];

    protected static $nullables = [
        'id' => false,
        'number' => false,
        'startDate' => false,
        'endDate' => false,
        'activateDate' => false,
        'branchId' => false,
        'clientName' => false,
        'clientInn' => false,
        'clientOgrn' => false,
        'clientAddress' => false,
        'receiverLastName' => false,
        'receiverFirstName' => false,
        'receiverSecondName' => false,
        'userId' => false,
        'phone' => false,
        'contract' => false,
    ];
}
