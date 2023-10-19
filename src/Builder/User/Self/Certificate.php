<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/certificate
 */
final class Certificate extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/certificate';

    public function get(): CertificateGet
    {
        return new CertificateGet($this->client, $this->getUrl());
    }
}
