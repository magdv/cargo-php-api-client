<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Candidate;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Candidate\Requests\CandidateRequest;
use Cargomart\ApiClient\Entity\Worker\Responses\WorkerResponse;

class IdPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создать сотрудника из потенциального сотрудника.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(CandidateRequest $body): WorkerResponse
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
