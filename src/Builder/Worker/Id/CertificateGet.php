<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Worker\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DigitalSignature\Responses\UserCertificateListResponse;

class CertificateGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить список сертификатов пользователя
     *
     * @return UserCertificateListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): UserCertificateListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            UserCertificateListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
