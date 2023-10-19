<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\UserCertificate;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\UserCertificate\CertificateId\Approve;
use Cargomart\ApiClient\Builder\UserCertificate\CertificateId\Cancel;
use Cargomart\ApiClient\Builder\UserCertificate\CertificateId\Reject;
use Cargomart\ApiClient\Builder\UserCertificate\CertificateId\Revoke;
use Cargomart\ApiClient\Builder\UserCertificate\CertificateId\Send;

/**
 * url: /api/v2/user-certificate/{certificateId}
 */
final class CertificateId extends AbstractBuilder
{
    protected const URL = '/api/v2/user-certificate/{certificateId}';

    public function send(): Send
    {
        return new Send($this->params, $this->client);
    }

    public function approve(): Approve
    {
        return new Approve($this->params, $this->client);
    }

    public function reject(): Reject
    {
        return new Reject($this->params, $this->client);
    }

    public function cancel(): Cancel
    {
        return new Cancel($this->params, $this->client);
    }

    public function revoke(): Revoke
    {
        return new Revoke($this->params, $this->client);
    }

    public function get(): CertificateIdGet
    {
        return new CertificateIdGet($this->client, $this->getUrl());
    }

    public function put(): CertificateIdPut
    {
        return new CertificateIdPut($this->client, $this->getUrl());
    }
}
