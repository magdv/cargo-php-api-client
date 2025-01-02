<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Requests\OrderEditRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderEditResponse;

class OrderIdPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Редактирование информации о заказе
     *
     * @return OrderEditResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderEditRequest $body): OrderEditResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            OrderEditResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
