<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/candidate/count
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Candidate;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Candidate\Responses\CandidateCountResponse;

final class CountGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Вывод количество потенциальных сотрудников компании.
     *
     * @return CandidateCountResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
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
