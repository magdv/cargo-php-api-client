<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-ecn/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderEcn;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderEcnResponse;

final class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение объекта ЭТрН
     *
     * @return OrderEcnResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderEcnResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderEcnResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
