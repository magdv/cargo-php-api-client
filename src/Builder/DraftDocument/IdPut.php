<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\DraftDocument;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DraftDocument\Requests\DraftDocumentRequest;
use Cargomart\ApiClient\Entity\DraftDocument\Responses\DraftDocumentResponse;

class IdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Замена данных черновика документа.
     *
     * @return DraftDocumentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(DraftDocumentRequest $body): DraftDocumentResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            DraftDocumentResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
