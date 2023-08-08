<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\UserCertificate\CertificateId;

/**
 * url: /api/v2/user-certificate
 */
final class UserCertificate extends AbstractBuilder
{
    protected const URL = '/api/v2/user-certificate';

    public function certificateId(string $certificateId): CertificateId
    {
        $params = $this->params;
        $params['certificateId'] = $certificateId;
        return new CertificateId($params, $this->client);
    }
}
