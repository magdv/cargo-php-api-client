<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: digital-signature/objects/user-certificate-short.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Сертификат ПЭП пользователя
 * source: digital-signature/objects/user-certificate-short.json
 *
 * @property string $id
 * @property string $status
 * @property string $proxyType
 * @property UserCertificateShortIssue $issue
 * @property string $revokeDate
 */
final class UserCertificateShort extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'status' => ['string'],
        'proxyType' => ['string'],
        'issue' => ['Cargomart\ApiClient\Entity\DigitalSignature\Objects\UserCertificateShortIssue'],
        'revokeDate' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'status' => false,
        'proxyType' => false,
        'issue' => false,
        'revokeDate' => false,
    ];
}
