<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor/price-local/pool/{poolId}/direction/{directionId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool\PoolId\Direction;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\EmptyObject;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;

final class DirectionIdDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Открепление направления от данного пула.
     *
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(EmptyObject $body): EmptyDataResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
