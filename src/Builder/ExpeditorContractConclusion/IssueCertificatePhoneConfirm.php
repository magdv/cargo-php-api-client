<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-contract-conclusion/issue-certificate-phone-confirm
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractConclusion;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-contract-conclusion/issue-certificate-phone-confirm
 */
final class IssueCertificatePhoneConfirm extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-conclusion/issue-certificate-phone-confirm';

    public function post(): IssueCertificatePhoneConfirmPost
    {
        return new IssueCertificatePhoneConfirmPost($this->client, $this->getUrl());
    }
}
