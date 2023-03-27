<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/user-certificate/{certificateId}/reject
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\UserCertificate\CertificateId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DigitalSignature\Requests\UserCertificateIssueRejectRequest;
use Cargomart\ApiClient\Entity\DigitalSignature\Responses\UserCertificateResponse;

final class RejectPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Сообщить об ошибке в сертификате.
     *
     * @return UserCertificateResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(UserCertificateIssueRejectRequest $body): UserCertificateResponse
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
