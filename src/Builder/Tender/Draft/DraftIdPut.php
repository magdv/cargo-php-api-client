<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Draft;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tender\Requests\TenderDraftUpdateRequest;
use Cargomart\ApiClient\Entity\Tender\Responses\TenderDraftItemResponse;

class DraftIdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Сохранение черновика тендера
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(TenderDraftUpdateRequest $body): TenderDraftItemResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            TenderDraftItemResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
