<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: digital-signature/requests/user-certificate-issue-reject-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Отказаться от простой подписи
 * source: digital-signature/requests/user-certificate-issue-reject-request.json
 *
 * @property string $rejectComment
 */
final class UserCertificateIssueRejectRequest extends AbstractEntity
{
    protected static $types = ['rejectComment' => ['string']];
    protected static $nullables = ['rejectComment' => false];
}
