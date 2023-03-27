<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/self/carriage-region
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyCarriageRegionResponse;

final class CarriageRegionGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Области своих перевозок.
     *
     * @return CompanyCarriageRegionResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyCarriageRegionResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyCarriageRegionResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
