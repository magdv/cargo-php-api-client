<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\UserCertificate\CertificateId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user-certificate/{certificateId}/reject
 */
final class Reject extends AbstractBuilder
{
    protected const URL = '/api/v2/user-certificate/{certificateId}/reject';

    public function post(): RejectPost
    {
        return new RejectPost($this->client, $this->getUrl());
    }
}
