<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Подтверждение телефона для ПЭП
 * source: expeditor-contract-conclusion/requests/expeditor-contract-conclusion-issue-certificate-confirm-request.json
 *
 * @property string $code
 */
final class ExpeditorContractConclusionIssueCertificateConfirmRequest extends AbstractEntity
{
    protected static $types = ['code' => ['string']];
    protected static $nullables = ['code' => false];
}
