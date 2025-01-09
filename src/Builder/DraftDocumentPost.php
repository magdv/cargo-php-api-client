<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DraftDocument\Requests\DraftDocumentRequest;
use Cargomart\ApiClient\Entity\DraftDocument\Responses\DraftDocumentResponse;

class DraftDocumentPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание черновика документа.
     *
     * @return DraftDocumentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(DraftDocumentRequest $body): DraftDocumentResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            DraftDocumentResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
