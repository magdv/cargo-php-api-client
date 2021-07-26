<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/issue-certificate-sign
 */
final class IssueCertificateSign extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/issue-certificate-sign';

    public function post(): IssueCertificateSignPost
    {
        return new IssueCertificateSignPost($this->client, $this->getUrl());
    }
}
