<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Requests\PriceLocalCreateRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalListResponse;

class PriceLocalPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание нового элемента в справочнике цен.
     *
     * @return PriceLocalListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(PriceLocalCreateRequest $body): PriceLocalListResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            PriceLocalListResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
