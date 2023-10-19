<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\UserCertificate\CertificateId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user-certificate/{certificateId}/cancel
 */
final class Cancel extends AbstractBuilder
{
    protected const URL = '/api/v2/user-certificate/{certificateId}/cancel';

    public function post(): CancelPost
    {
        return new CancelPost($this->client, $this->getUrl());
    }
}
