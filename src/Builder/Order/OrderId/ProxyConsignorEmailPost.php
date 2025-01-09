<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Requests\OrderProxyEmailRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderProxyEmailResponse;

class ProxyConsignorEmailPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправка доверенности на список email
     *
     * @return OrderProxyEmailResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderProxyEmailRequest $body): OrderProxyEmailResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderProxyEmailResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
