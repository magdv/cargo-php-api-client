<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/simple-document
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderSimpleDocumentResponse;

final class SimpleDocumentGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение документов заказа со списком титулов
     *
     * @return OrderSimpleDocumentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderSimpleDocumentResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderSimpleDocumentResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
