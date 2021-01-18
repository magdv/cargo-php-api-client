<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Objects\CarriageDirection;
use Cargomart\ApiClient\Entity\Company\Responses\CarriageDirection;

class CarriageDirectionPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Направления перевозок отправителя.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(CarriageDirection $body): CarriageDirection
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            CarriageDirection::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
