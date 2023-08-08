<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Отправка телефона для получения роли ПЭП-админ на подтверждение
 * source: expeditor-contract-conclusion/requests/expeditor-contract-conclusion-issue-certificate-phone-request.json
 *
 * @property string $phone
 */
final class ExpeditorContractConclusionIssueCertificatePhoneRequest extends AbstractEntity
{
    protected static $types = ['phone' => ['string']];
    protected static $nullables = ['phone' => false];
}
