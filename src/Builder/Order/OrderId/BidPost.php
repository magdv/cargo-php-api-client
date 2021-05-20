<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\BidPushRequest;
use Cargomart\ApiClient\Entity\Order\Responses\BidLastResponse;

class BidPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Установка ставки на заказ.
     *
     * @return BidLastResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(BidPushRequest $body): BidLastResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            BidLastResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
