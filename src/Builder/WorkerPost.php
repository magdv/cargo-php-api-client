<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Worker\Requests\WorkerChangeRequest;
use Cargomart\ApiClient\Entity\Worker\Responses\WorkerResponse;

class WorkerPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание нового сотрудника.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(WorkerChangeRequest $body): WorkerResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            WorkerResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
