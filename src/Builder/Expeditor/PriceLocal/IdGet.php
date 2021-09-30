<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalListResponse;

class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение данных конкретного элемента справочника цен.
     *
     * @return PriceLocalListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PriceLocalListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PriceLocalListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
