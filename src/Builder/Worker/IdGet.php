<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/worker/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Worker;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Worker\Responses\WorkerResponse;

final class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение информации по указанному сотруднику компании.
     *
     * @return WorkerResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): WorkerResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            WorkerResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
