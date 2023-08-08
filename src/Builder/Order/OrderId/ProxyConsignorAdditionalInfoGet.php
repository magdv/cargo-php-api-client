<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderProxyInfoResponse;

class ProxyConsignorAdditionalInfoGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить добавочные данные, или проверить их наличие.
     *
     * @return OrderProxyInfoResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderProxyInfoResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderProxyInfoResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
