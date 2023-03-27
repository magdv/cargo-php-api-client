<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: digital-signature/requests/user-certificate-update-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Отказаться от простой подписи
 * source: digital-signature/requests/user-certificate-update-request.json
 *
 * @property string $proxyType
 */
final class UserCertificateUpdateRequest extends AbstractEntity
{
    protected static $types = ['proxyType' => ['string']];
    protected static $nullables = ['proxyType' => false];
}
