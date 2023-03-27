<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/refuse-revert-patch
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderRefuseRevertPatchRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderPatchResponse;

final class RefuseRevertPatchPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание запроса на возвращение Отправителем заявки Экспедитора с победителем в работу после отказа.
     *
     * @return OrderPatchResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderRefuseRevertPatchRequest $body): OrderPatchResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderPatchResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
