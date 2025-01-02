<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderProxyEmailResponse;

class ProxyConsignorEmailGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить список email для точки погрузки, для плеча.
     *
     * @return OrderProxyEmailResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderProxyEmailResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderProxyEmailResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
