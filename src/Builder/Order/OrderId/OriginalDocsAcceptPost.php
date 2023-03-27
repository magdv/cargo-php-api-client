<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/original-docs-accept
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderCardResponse;

final class OriginalDocsAcceptPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подтвердить принятие оригиналов документов.
     *
     * @return OrderCardResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderCardResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderCardResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
