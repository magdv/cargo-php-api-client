<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Worker\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/worker/{id}/certificate
 */
final class Certificate extends AbstractBuilder
{
    protected const URL = '/api/v2/worker/{id}/certificate';

    public function get(): CertificateGet
    {
        return new CertificateGet($this->client, $this->getUrl());
    }

    public function post(): CertificatePost
    {
        return new CertificatePost($this->client, $this->getUrl());
    }
}
