<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Itinerary\Responses\ItineraryListResponse;

class RoutePathGet extends AbstractRequest
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
}
