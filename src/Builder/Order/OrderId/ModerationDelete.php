<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderEditResponse;

class ModerationDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Забрать заказ на модерации ГП.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): OrderEditResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            OrderEditResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
