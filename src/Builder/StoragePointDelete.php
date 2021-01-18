<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\MessageResponse;
use Cargomart\ApiClient\Entity\StoragePoint\Requests\SpBatchDeleteRequest;

class StoragePointDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Удаление нескольких пунктов погрузки/выгрузки. Список идентификаторов должен быть передан в теле запроса.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(SpBatchDeleteRequest $body): MessageResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            MessageResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
