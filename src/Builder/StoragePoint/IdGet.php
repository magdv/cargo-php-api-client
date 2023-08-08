<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\StoragePoint;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\StoragePoint\Responses\PointOne;

class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Информация о конкретном пункте погрузки/выгрузки
     *
     * @return PointOne
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PointOne
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PointOne::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
