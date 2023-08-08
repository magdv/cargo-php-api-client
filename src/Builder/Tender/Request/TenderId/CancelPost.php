<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request\TenderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestItemResponse;

class CancelPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отмена тендера
     *
     * @return TenderRequestItemResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): TenderRequestItemResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            TenderRequestItemResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
