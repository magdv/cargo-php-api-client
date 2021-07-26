<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Requests\IssueCertificateSignRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserFullResponse;

class IssueCertificateSignPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подписать сертификат полученным приватным кодом.
     *
     * @return UserFullResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(IssueCertificateSignRequest $body): UserFullResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            UserFullResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
