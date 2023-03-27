<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{id}/patch
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderPatchRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderPatchResponse;

final class PatchPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * @deprecated использовать /api/v2/expeditor-proposal/{id}/patch
     *
     * @return OrderPatchResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderPatchRequest $body): OrderPatchResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderPatchResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
