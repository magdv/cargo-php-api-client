<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Requests\OrderPublishRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderEditResponse;

class ModerationPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправка заказа на модерацию ГП.
     *
     * @return OrderEditResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderPublishRequest $body): OrderEditResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderEditResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
