<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: digital-signature/responses/user-certificate-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\DigitalSignature\Objects\UserCertificate;

/**
 * source: digital-signature/responses/user-certificate-response.json#/properties/data
 *
 * @property UserCertificate $certificate
 */
final class UserCertificateResponseData extends AbstractEntity
{
    protected static $types = ['certificate' => ['Cargomart\ApiClient\Entity\DigitalSignature\Objects\UserCertificate']];
    protected static $nullables = ['certificate' => false];
}
