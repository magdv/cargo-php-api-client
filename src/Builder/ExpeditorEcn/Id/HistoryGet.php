<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorEcn\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\OrderEcn\Responses\OrderEcnHistoryResponse;

class HistoryGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * История ЭТрН
     *
     * @return OrderEcnHistoryResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderEcnHistoryResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderEcnHistoryResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
