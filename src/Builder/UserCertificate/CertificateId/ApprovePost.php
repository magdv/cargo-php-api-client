<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/user-certificate/{certificateId}/approve
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\UserCertificate\CertificateId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DigitalSignature\Requests\UserCertificateIssueApproveRequest;
use Cargomart\ApiClient\Entity\DigitalSignature\Responses\UserCertificateResponse;

final class ApprovePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подтвердить сертификат.
     *
     * @return UserCertificateResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(UserCertificateIssueApproveRequest $body): UserCertificateResponse
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
