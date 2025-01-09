<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Requests\OrderEditTagRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderTagListResponse;

class TagPut extends AbstractRequest
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
