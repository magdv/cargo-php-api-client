<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/user-certificate/{certificateId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\UserCertificate;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DigitalSignature\Responses\UserCertificateResponse;

final class CertificateIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Просмотреть информацию о сертификате
     *
     * @return UserCertificateResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): UserCertificateResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            UserCertificateResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
