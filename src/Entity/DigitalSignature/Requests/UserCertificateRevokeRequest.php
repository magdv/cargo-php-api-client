<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Отзыв сертификата ПЭП
 * source: digital-signature/requests/user-certificate-revoke-request.json
 *
 * @property string $reason
 */
final class UserCertificateRevokeRequest extends AbstractEntity
{
    protected static $types = ['reason' => ['string']];
    protected static $nullables = ['reason' => false];
}
