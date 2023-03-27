<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/carriage-direction
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyCarriageDirectionResponse;

final class CarriageDirectionGet extends AbstractRequest
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
