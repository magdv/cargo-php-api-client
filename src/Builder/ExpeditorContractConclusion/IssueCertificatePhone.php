<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-contract-conclusion/issue-certificate-phone
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractConclusion;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-contract-conclusion/issue-certificate-phone
 */
final class IssueCertificatePhone extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-conclusion/issue-certificate-phone';

    public function post(): IssueCertificatePhonePost
    {
        return new IssueCertificatePhonePost($this->client, $this->getUrl());
    }
}
