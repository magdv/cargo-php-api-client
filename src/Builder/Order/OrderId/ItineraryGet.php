<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Itinerary\Responses\ItineraryListResponse;

class ItineraryGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение данных по точкам маршрута.
     *
     * @return ItineraryListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ItineraryListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ItineraryListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Связанные данные, добавить реальное меспотоложение машины
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qWith(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['with']);
        } else {
            $c->query['with'] = $value;
        }

        return $c;
    }
}
