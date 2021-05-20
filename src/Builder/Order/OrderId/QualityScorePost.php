<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderQualityScoreRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderQualityScoreResponse;

class QualityScorePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Добавить оценку.
     *
     * @return OrderQualityScoreResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderQualityScoreRequest $body): OrderQualityScoreResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderQualityScoreResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
