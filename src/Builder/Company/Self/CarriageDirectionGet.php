<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyCarriageDirectionResponse;

class CarriageDirectionGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Направления своих перевозок.
     *
     * @return CompanyCarriageDirectionResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyCarriageDirectionResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyCarriageDirectionResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
