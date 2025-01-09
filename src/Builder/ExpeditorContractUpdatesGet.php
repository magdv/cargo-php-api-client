<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Responses\ExpeditorContractUpdatesResponse;

class ExpeditorContractUpdatesGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Просмотр текущего состояние обновления договора
     *
     * @return ExpeditorContractUpdatesResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ExpeditorContractUpdatesResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ExpeditorContractUpdatesResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
