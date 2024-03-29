<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Objects\CarriageRegion;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyCarriageRegionResponse;

class CarriageRegionPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Области перевозок.
     *
     * @return CompanyCarriageRegionResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(CarriageRegion $body): CompanyCarriageRegionResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            CompanyCarriageRegionResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
