<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\DraftDocument;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DraftDocument\Responses\DraftDocumentResponse;

class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение черновика документа.
     *
     * @return DraftDocumentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): DraftDocumentResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            DraftDocumentResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
