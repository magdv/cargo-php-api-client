<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalSimpleDocumentsResponse;

class SimpleDocumentsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка документов заявки со списком титулов
     *
     * @return ProposalSimpleDocumentsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ProposalSimpleDocumentsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ProposalSimpleDocumentsResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
