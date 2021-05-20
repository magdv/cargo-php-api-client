<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Objects\CarriageRegion;
use Cargomart\ApiClient\Entity\Company\Responses\CarriageRegion;

class CarriageRegionPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Области перевозок.
     *
     * @return CarriageRegion
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(CarriageRegion $body): CarriageRegion
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            CarriageRegion::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
