<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-patch/{patchId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderPatch;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderPatchResponse;

final class PatchIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение данных запроса на изменение заказа.
     *
     * @return OrderPatchResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderPatchResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderPatchResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
