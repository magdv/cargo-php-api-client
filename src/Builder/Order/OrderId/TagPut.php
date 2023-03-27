<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/tag
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderEditTagRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderTagListResponse;

final class TagPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Запись списка тэгов.
     *
     * @return OrderTagListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderEditTagRequest $body): OrderTagListResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            OrderTagListResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
