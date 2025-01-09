<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractUpdates;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Requests\ExpeditorContractUpdatesCommercialConditionsRequest;
use Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Responses\ExpeditorContractUpdatesResponse;

class CommercialConditionsPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Коммерческие условия
     *
     * @return ExpeditorContractUpdatesResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ExpeditorContractUpdatesCommercialConditionsRequest $body): ExpeditorContractUpdatesResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            ExpeditorContractUpdatesResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
