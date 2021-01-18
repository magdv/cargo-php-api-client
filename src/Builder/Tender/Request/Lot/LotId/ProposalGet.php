<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request\Lot\LotId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestLotProposalListResponse;

class ProposalGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить список предложений по лоту
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): TenderRequestLotProposalListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            TenderRequestLotProposalListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
