<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\SignedDocument;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\SignedDocument\Responses\SignedDocumentResponse;

class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Детали подписанного документу.
     *
     * @return SignedDocumentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): SignedDocumentResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            SignedDocumentResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
