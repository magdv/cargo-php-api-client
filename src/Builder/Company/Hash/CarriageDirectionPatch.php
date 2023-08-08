<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Objects\CarriageDirection;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyCarriageDirectionResponse;

class CarriageDirectionPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Направления перевозок отправителя.
     *
     * @return CompanyCarriageDirectionResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(CarriageDirection $body): CompanyCarriageDirectionResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            CompanyCarriageDirectionResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
