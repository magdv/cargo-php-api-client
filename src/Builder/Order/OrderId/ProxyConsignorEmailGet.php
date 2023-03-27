<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/proxy-consignor-email
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderProxyEmailResponse;

final class ProxyConsignorEmailGet extends AbstractRequest
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
