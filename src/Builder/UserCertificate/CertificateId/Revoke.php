<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/user-certificate/{certificateId}/revoke
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\UserCertificate\CertificateId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user-certificate/{certificateId}/revoke
 */
final class Revoke extends AbstractBuilder
{
    protected const URL = '/api/v2/user-certificate/{certificateId}/revoke';

    public function post(): RevokePost
    {
        return new RevokePost($this->client, $this->getUrl());
    }
}
