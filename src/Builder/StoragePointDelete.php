<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/storage-point
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;
use Cargomart\ApiClient\Entity\StoragePoint\Requests\SpBatchDeleteRequest;

final class StoragePointDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Удаление нескольких пунктов погрузки/выгрузки. Список идентификаторов должен быть передан в теле запроса.
     *
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(SpBatchDeleteRequest $body): EmptyDataResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
