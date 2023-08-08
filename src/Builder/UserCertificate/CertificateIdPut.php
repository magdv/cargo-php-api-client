<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\UserCertificate;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DigitalSignature\Requests\UserCertificateUpdateRequest;
use Cargomart\ApiClient\Entity\DigitalSignature\Responses\UserCertificateResponse;

class CertificateIdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Обновление данных сертификата.
     *
     * @return UserCertificateResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(UserCertificateUpdateRequest $body): UserCertificateResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            UserCertificateResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
