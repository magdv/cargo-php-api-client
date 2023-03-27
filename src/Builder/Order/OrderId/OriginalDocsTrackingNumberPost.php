<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/original-docs-tracking-number
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\TrackingNumberRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderCardResponse;

final class OriginalDocsTrackingNumberPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Указать трек номер отправленных документов.
     *
     * @return OrderCardResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(TrackingNumberRequest $body): OrderCardResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderCardResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
