<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CarriageRegion;

class CarriageRegionGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Области своих перевозок.
     *
     * @return CarriageRegion
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CarriageRegion
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CarriageRegion::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
