<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderRefuseReasonsResponse;

class OrderRefuseReasonGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Словарь причин для отказа
     *
     * @return OrderRefuseReasonsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderRefuseReasonsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderRefuseReasonsResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
