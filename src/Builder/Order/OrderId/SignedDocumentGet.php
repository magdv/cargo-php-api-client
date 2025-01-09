<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderSignedDocumentListResponse;

class SignedDocumentGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение документов заказа со списком титулов
     *
     * @return OrderSignedDocumentListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderSignedDocumentListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderSignedDocumentListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
