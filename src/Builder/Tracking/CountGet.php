<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/tracking/count
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tracking;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\TrackingCountResponse;

final class CountGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получения количества отслеживаний.
     *
     * @return TrackingCountResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
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
