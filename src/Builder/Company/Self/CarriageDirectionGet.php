<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CarriageDirection;

class CarriageDirectionGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Направления своих перевозок.
     *
     * @return CarriageDirection
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CarriageDirection
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CarriageDirection::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
