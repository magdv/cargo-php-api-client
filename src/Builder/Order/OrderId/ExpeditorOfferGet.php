<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\ExpeditorOffer\Responses\ExpeditorOffersResponse;

class ExpeditorOfferGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Список предложений от перевозчиков для отправителя.
     *
     * @return ExpeditorOffersResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ExpeditorOffersResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ExpeditorOffersResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
