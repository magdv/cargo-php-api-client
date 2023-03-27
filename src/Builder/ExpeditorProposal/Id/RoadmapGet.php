<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-proposal/{id}/roadmap
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderRoadmapListResponse;

final class RoadmapGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение роадмап
     *
     * @return OrderRoadmapListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderRoadmapListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderRoadmapListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
