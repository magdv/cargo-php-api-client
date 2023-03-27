<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: digital-signature/objects/user-certificate.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileUrl;

/**
 * Сертификат ПЭП пользователя
 * source: digital-signature/objects/user-certificate.json
 *
 * @property string $id
 * @property string $status
 * @property int $serialId
 * @property string $companyName
 * @property string $systemCompanyName
 * @property string $contractNumber
 * @property string $contractDate
 * @property int $receiverId
 * @property string $receiverPhone
 * @property string $receiverLastName
 * @property string $receiverFirstName
 * @property string $receiverSecondName
 * @property string $proxyType
 * @property FileUrl $certificateFile
 * @property UserCertificateIssue $issue
 * @property UserCertificateRevoke $revoke
 * @property UserCertificateContract $contract
 * @property UserCertificateAccess $access
 */
final class UserCertificate extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'status' => ['string'],
        'serialId' => ['int'],
        'companyName' => ['string'],
        'systemCompanyName' => ['string'],
        'contractNumber' => ['string'],
        'contractDate' => ['string'],
        'receiverId' => ['int'],
        'receiverPhone' => ['string'],
        'receiverLastName' => ['string'],
        'receiverFirstName' => ['string'],
        'receiverSecondName' => ['string'],
        'proxyType' => ['string'],
        'certificateFile' => ['Cargomart\ApiClient\Entity\File\Objects\FileUrl'],
        'issue' => ['Cargomart\ApiClient\Entity\DigitalSignature\Objects\UserCertificateIssue'],
        'revoke' => ['Cargomart\ApiClient\Entity\DigitalSignature\Objects\UserCertificateRevoke'],
        'contract' => ['Cargomart\ApiClient\Entity\DigitalSignature\Objects\UserCertificateContract'],
        'access' => ['Cargomart\ApiClient\Entity\DigitalSignature\Objects\UserCertificateAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'status' => false,
        'serialId' => false,
        'companyName' => false,
        'systemCompanyName' => false,
        'contractNumber' => false,
        'contractDate' => false,
        'receiverId' => false,
        'receiverPhone' => false,
        'receiverLastName' => false,
        'receiverFirstName' => false,
        'receiverSecondName' => false,
        'proxyType' => false,
        'certificateFile' => false,
        'issue' => false,
        'revoke' => false,
        'contract' => false,
        'access' => false,
    ];
}
