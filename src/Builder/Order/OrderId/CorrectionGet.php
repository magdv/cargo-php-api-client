<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/correction
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderCorrectionResponse;

final class CorrectionGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение данных последнего опубликованного запроса на изменение заказа.
     *
     * @return OrderCorrectionResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderCorrectionResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderCorrectionResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
