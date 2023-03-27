<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/clone
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderEditResponse;

final class XClonePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание нового заказа из шаблона или на основании
     *
     * @return OrderEditResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderEditResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderEditResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
