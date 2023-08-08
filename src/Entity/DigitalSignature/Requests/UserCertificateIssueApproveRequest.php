<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Подписать сертификат полученным кодом
 * source: digital-signature/requests/user-certificate-issue-approve-request.json
 *
 * @property string $code
 */
final class UserCertificateIssueApproveRequest extends AbstractEntity
{
    protected static $types = ['code' => ['string']];
    protected static $nullables = ['code' => false];
}
