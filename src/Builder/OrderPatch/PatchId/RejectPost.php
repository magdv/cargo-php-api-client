<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-patch/{patchId}/reject
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderPatch\PatchId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;
use Cargomart\ApiClient\Entity\Order\Requests\OrderPatchRejectRequest;

final class RejectPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отклонение запроса на изменение заказа.
     *
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderPatchRejectRequest $body): EmptyDataResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
