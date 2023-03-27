<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/worker/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Worker;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Worker\Requests\WorkerChangeRequest;
use Cargomart\ApiClient\Entity\Worker\Responses\WorkerResponse;

final class IdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Обновить данные сотрудника.
     *
     * @return WorkerResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(WorkerChangeRequest $body): WorkerResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            WorkerResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
