<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-contract-conclusion/issue-certificate
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractConclusion;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-contract-conclusion/issue-certificate
 */
final class IssueCertificate extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-conclusion/issue-certificate';

    public function post(): IssueCertificatePost
    {
        return new IssueCertificatePost($this->client, $this->getUrl());
    }
}
