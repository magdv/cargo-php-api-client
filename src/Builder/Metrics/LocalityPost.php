<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Metrics;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\MessageResponse;
use Cargomart\ApiClient\Entity\Metric\Requests\LocalityMetricRequest;

class LocalityPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправка нового события метрики для поиска по пунктам отправления/назначения
     *
     * @return MessageResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(LocalityMetricRequest $body): MessageResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            MessageResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
