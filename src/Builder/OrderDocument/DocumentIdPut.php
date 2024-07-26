<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocument;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Requests\OrderDocumentUpdateRequest;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Responses\OrderDocumentResponse;

class DocumentIdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Редактирование документа
     *
     * @return OrderDocumentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderDocumentUpdateRequest $body): OrderDocumentResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            OrderDocumentResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
