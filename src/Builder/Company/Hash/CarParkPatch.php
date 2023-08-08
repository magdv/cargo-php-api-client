<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Objects\CarPark;
use Cargomart\ApiClient\Entity\Company\Responses\CarParkResponse;

class CarParkPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * автопарк перевозчика.
     *
     * @return CarParkResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(CarPark $body): CarParkResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            CarParkResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
