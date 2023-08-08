<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\SimpleDocument;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\SimpleDocument\Responses\SimpleDocumentResponse;

class RootIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Детали по подписанному документу заказа.
     *
     * @return SimpleDocumentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): SimpleDocumentResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            SimpleDocumentResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
