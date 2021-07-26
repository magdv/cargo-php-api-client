<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/issue-certificate-reject
 */
final class IssueCertificateReject extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/issue-certificate-reject';

    public function post(): IssueCertificateRejectPost
    {
        return new IssueCertificateRejectPost($this->client, $this->getUrl());
    }
}
