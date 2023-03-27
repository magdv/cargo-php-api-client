<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor/price-local/price
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Requests\PriceLocalCreateRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalItemResponse;

final class PricePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание нового элемента в справочнике цен.
     *
     * @return PriceLocalItemResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(PriceLocalCreateRequest $body): PriceLocalItemResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            PriceLocalItemResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
