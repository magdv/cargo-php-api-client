<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-contract-conclusion/kontur-data-approve
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractConclusion;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Responses\ExpeditorContractConclusionResponse;

final class KonturDataApprovePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подтверждение данных полученных из контура.
     *
     * @return ExpeditorContractConclusionResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ExpeditorContractConclusionResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            ExpeditorContractConclusionResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
