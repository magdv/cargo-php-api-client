<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderDriverResponse;

class RefreshDriverPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Обновить данные водителя в заказе
     *
     * @return OrderDriverResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderDriverResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            OrderDriverResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
