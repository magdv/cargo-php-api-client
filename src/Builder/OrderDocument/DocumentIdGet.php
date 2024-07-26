<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocument;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Responses\OrderDocumentResponse;

class DocumentIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение документа
     *
     * @return OrderDocumentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderDocumentResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderDocumentResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
