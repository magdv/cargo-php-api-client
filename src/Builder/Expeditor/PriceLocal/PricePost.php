<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Requests\PriceLocalCreateRequest;
use Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Responses\PriceLocalItemResponse;

class PricePost extends AbstractRequest
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
