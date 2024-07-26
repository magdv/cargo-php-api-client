<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool\PoolId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Requests\PriceLocalDirectionCreateRequest;
use Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Responses\PriceLocalDirectionItemResponse;

class DirectionPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Прикрепление направления к данному пулу направлений и цен.
     *
     * @return PriceLocalDirectionItemResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(PriceLocalDirectionCreateRequest $body): PriceLocalDirectionItemResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            PriceLocalDirectionItemResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
