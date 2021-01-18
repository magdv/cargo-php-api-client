<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\StoragePoint;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\StoragePoint\Requests\SpPoint;
use Cargomart\ApiClient\Entity\StoragePoint\Responses\PointOne;

class IdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Редактирование пункта погрузки/выгрузки
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(SpPoint $body): PointOne
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            PointOne::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
