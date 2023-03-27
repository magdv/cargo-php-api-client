<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: digital-signature/objects/user-certificate.json#/properties/revoke
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileUrl;

/**
 * Информация про отзыв
 * source: digital-signature/objects/user-certificate.json#/properties/revoke
 *
 * @property string $reason
 * @property string $date
 * @property string $revokerName
 * @property string $revokerPosition
 * @property FileUrl $revokeFile
 */
final class UserCertificateRevoke extends AbstractEntity
{
    protected static $types = [
        'reason' => ['string'],
        'date' => ['string'],
        'revokerName' => ['string'],
        'revokerPosition' => ['string'],
        'revokeFile' => ['Cargomart\ApiClient\Entity\File\Objects\FileUrl'],
    ];

    protected static $nullables = [
        'reason' => false,
        'date' => false,
        'revokerName' => false,
        'revokerPosition' => false,
        'revokeFile' => false,
    ];
}
