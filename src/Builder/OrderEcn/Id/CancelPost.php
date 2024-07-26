<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderEcn\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\OrderEcn\Responses\OrderEcnResponse;

class CancelPost extends AbstractRequest
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
