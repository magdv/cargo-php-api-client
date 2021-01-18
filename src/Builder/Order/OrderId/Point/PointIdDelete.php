<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Point;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\MessageResponse;

class PointIdDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Удаление маршрутной точки
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): MessageResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            MessageResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
