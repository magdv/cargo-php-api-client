<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Common\Responses\ExpeditorProposalSignedDocumentListResponse;

class SignedDocumentGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка документов заявки со списком титулов
     *
     * @return ExpeditorProposalSignedDocumentListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ExpeditorProposalSignedDocumentListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ExpeditorProposalSignedDocumentListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
