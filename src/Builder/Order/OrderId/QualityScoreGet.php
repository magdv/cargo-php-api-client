<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderQualityScoreResponse;

class QualityScoreGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить оценку.
     *
     * @return OrderQualityScoreResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderQualityScoreResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderQualityScoreResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
