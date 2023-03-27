<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-document-package/{packageId}/document
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderDocumentUpdateRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderDocumentResponse;

final class DocumentPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание документа
     *
     * @return OrderDocumentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderDocumentUpdateRequest $body): OrderDocumentResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderDocumentResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
