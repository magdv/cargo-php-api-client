<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-proposal/{id}/expeditor-offer
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalOffersListResponse;

final class ExpeditorOfferGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Список предложений от перевозчиков для экспедитора.
     *
     * @return ProposalOffersListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ProposalOffersListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ProposalOffersListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
