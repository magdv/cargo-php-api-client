<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Worker\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/worker/{id}/issue-certificate
 */
final class IssueCertificate extends AbstractBuilder
{
    protected const URL = '/api/v2/worker/{id}/issue-certificate';

    public function post(): IssueCertificatePost
    {
        return new IssueCertificatePost($this->client, $this->getUrl());
    }

    public function patch(): IssueCertificatePatch
    {
        return new IssueCertificatePatch($this->client, $this->getUrl());
    }

    public function delete(): IssueCertificateDelete
    {
        return new IssueCertificateDelete($this->client, $this->getUrl());
    }
}
