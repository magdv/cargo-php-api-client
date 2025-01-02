<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderPinResponse;

class PinDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Удаление заказа из списка закрепленных.
     *
     * @return OrderPinResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderPinResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            OrderPinResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
