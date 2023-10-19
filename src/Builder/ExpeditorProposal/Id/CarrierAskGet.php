<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalCarrierAsksResponse;

class CarrierAskGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Список ставок от перевозчиков для Экспедитора.
     *
     * @return ProposalCarrierAsksResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ProposalCarrierAsksResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ProposalCarrierAsksResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
