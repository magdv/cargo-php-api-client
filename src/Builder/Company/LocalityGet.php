<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyLocalityResponse;

class LocalityGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * регионы доступные для перевозок.
     *
     * @return CompanyLocalityResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyLocalityResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyLocalityResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
