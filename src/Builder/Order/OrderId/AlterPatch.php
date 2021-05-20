<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderAlterRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderCardResponse;

class AlterPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * редактировать список полей на заказ.
     *
     * @return OrderCardResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderAlterRequest $body): OrderCardResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            OrderCardResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
