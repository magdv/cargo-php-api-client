<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-proposal/{id}/bid
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\BidListResponse;

final class BidGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Список ставок от перевозчиков.
     *
     * @return BidListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): BidListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            BidListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
