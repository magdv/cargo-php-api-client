<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Bid;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\BidLastResponse;

class LastGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение последней информации связанной с торгами.
     *
     * @return BidLastResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): BidLastResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            BidLastResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
