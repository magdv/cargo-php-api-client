<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderPointCreateRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderPointEditResponse;

class PointPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание новой маршрутной точки
     *
     * @return OrderPointEditResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderPointCreateRequest $body): OrderPointEditResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderPointEditResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
