<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/candidate/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Candidate;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Candidate\Responses\CandidateResponse;

final class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение информации по потенциальному сотруднику компании.
     *
     * @return CandidateResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CandidateResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CandidateResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
