<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/tender/draft/{draftId}/publish
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Draft\DraftId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tender\Responses\TenderDraftRequestResponse;

final class PublishPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Публикация черновика
     *
     * @return TenderDraftRequestResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): TenderDraftRequestResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            TenderDraftRequestResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
