<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация по выдаче
 * source: digital-signature/objects/user-certificate.json#/properties/issue
 *
 * @property string $rejectComment
 * @property string $confirmBeforeDate
 * @property string $resendAfterDate
 */
final class UserCertificateIssue extends AbstractEntity
{
    protected static $types = [
        'rejectComment' => ['string'],
        'confirmBeforeDate' => ['string'],
        'resendAfterDate' => ['string'],
    ];

    protected static $nullables = ['rejectComment' => false, 'confirmBeforeDate' => false, 'resendAfterDate' => false];
}
