<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Candidate;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Candidate\Responses\CandidateCountResponse;

class CountGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Вывод количество потенциальных сотрудников компании.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): CandidateCountResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CandidateCountResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
