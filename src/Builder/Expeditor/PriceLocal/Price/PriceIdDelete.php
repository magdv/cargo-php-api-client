<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Price;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\EmptyObject;
use Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalItemResponse;

class PriceIdDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Деактивация направления.
     *
     * @return PriceLocalItemResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(EmptyObject $body): PriceLocalItemResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            PriceLocalItemResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
