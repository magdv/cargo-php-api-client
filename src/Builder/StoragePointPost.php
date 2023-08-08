<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\StoragePoint\Requests\SpPoint;
use Cargomart\ApiClient\Entity\StoragePoint\Responses\PointOne;

class StoragePointPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание нового пункта погрузки/выгрузки
     *
     * @return PointOne
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(SpPoint $body): PointOne
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            PointOne::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
