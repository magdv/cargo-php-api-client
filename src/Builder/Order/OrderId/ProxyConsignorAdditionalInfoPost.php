<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderProxyInfoRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderProxyInfoResponse;

class ProxyConsignorAdditionalInfoPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Заполнить или изменить добавочные данные в будущую довереность на самовывоз c\без факсимиле.
     *
     * @return OrderProxyInfoResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderProxyInfoRequest $body): OrderProxyInfoResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderProxyInfoResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
