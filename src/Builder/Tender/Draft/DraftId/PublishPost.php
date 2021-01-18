<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Draft\DraftId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tender\Responses\TenderDraftRequestResponse;

class PublishPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Публикация черновика
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
