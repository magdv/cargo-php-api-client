<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderOfferListResponse;

class OfferGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * получение списка предложений на заказ.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): OrderOfferListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderOfferListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
