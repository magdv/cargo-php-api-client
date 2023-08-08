<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderPinResponse;

class PinPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Добавление заказа в список закрепленных.
     *
     * @return OrderPinResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderPinResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderPinResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
