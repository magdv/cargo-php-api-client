<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/candidate
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Candidate\Responses\CandidateListResponse;

final class CandidateGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Вывод списка потенциальных сотрудников компании.
     *
     * @return CandidateListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CandidateListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CandidateListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Просматриваемая страница, по умолчанию 1
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPage(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['page']);
        } else {
            $c->query['page'] = $value;
        }

        return $c;
    }

    /**
     * Количество элементов на одну страницу, по умолчанию 20
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPerPage(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['perPage']);
        } else {
            $c->query['perPage'] = $value;
        }

        return $c;
    }
}
