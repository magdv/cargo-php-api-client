<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Отказаться от простой подписи
 * source: user/requests/issue-certificate-reject-request.json
 *
 * @property string $rejectComment
 */
final class IssueCertificateRejectRequest extends AbstractEntity
{
    protected static $types = ['rejectComment' => ['string']];
    protected static $nullables = ['rejectComment' => false];
}
