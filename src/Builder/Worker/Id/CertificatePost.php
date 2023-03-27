<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/worker/{id}/certificate
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Worker\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DigitalSignature\Responses\UserCertificateResponse;
use Cargomart\ApiClient\Entity\Worker\Requests\WorkerCertificateCreateRequest;

final class CertificatePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Выдача сертификата пользователю
     *
     * @return UserCertificateResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(WorkerCertificateCreateRequest $body): UserCertificateResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            UserCertificateResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
