<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Worker\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Worker\Responses\WorkerResponse;

class IssueCertificateDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отменить выдачу сертификата
     *
     * @return WorkerResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): WorkerResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            WorkerResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
