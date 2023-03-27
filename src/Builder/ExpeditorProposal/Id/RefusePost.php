<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-proposal/{id}/refuse
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Requests\ProposalRefuseRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalCardResponse;

final class RefusePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Оформить отказ Экспедитора от заказа.
     *
     * @return ProposalCardResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ProposalRefuseRequest $body): ProposalCardResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            ProposalCardResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
