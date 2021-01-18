<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tracking;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\TrackingCountResponse;

class CountGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получения количества отслеживаний.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): TrackingCountResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            TrackingCountResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
