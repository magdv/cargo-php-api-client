<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация по выдаче
 * source: digital-signature/objects/user-certificate-short.json#/properties/issue
 *
 * @property string $rejectComment
 */
final class UserCertificateShortIssue extends AbstractEntity
{
    protected static $types = ['rejectComment' => ['string']];
    protected static $nullables = ['rejectComment' => false];
}
