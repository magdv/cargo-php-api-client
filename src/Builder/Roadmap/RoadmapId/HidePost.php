<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Roadmap\RoadmapId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\EmptyObject;
use Cargomart\ApiClient\Entity\Order\OrderRoadmap\Responses\OrderRoadmapListResponse;

class HidePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Скрытие динамического типа роадмап
     *
     * @return OrderRoadmapListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(EmptyObject $body): OrderRoadmapListResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderRoadmapListResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
