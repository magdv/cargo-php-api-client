<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\UserCertificate\CertificateId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user-certificate/{certificateId}/approve
 */
final class Approve extends AbstractBuilder
{
    protected const URL = '/api/v2/user-certificate/{certificateId}/approve';

    public function post(): ApprovePost
    {
        return new ApprovePost($this->client, $this->getUrl());
    }
}
