<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Itinerary;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Itinerary\Responses\ItineraryListResponse;

class ByKladrGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод возвращает данные маршрута, по точкам кладра.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
     * Начало маршрута.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qDeparture(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['departure']);
        } else {
            $c->query['departure'] = $value;
        }

        return $c;
    }

    /**
     * Окончание маршрута.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qDestination(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['destination']);
        } else {
            $c->query['destination'] = $value;
        }

        return $c;
    }
}
