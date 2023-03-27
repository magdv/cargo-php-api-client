<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-ecn/{id}/cancel
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderEcn\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderEcnResponse;

final class CancelPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отмена ЭТрН
     *
     * @return OrderEcnResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderEcnResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderEcnResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
