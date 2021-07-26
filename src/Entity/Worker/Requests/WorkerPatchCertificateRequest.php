<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Внести изменения в сертификат
 * source: worker/requests/worker-patch-issue-certificate-request.json
 *
 * @property string $simpleSignatureRole
 */
final class WorkerPatchCertificateRequest extends AbstractEntity
{
    protected static $types = ['simpleSignatureRole' => ['string']];
    protected static $nullables = ['simpleSignatureRole' => false];
}
