<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-contract-conclusion
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Responses\ExpeditorContractConclusionResponse;

final class ExpeditorContractConclusionPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание нового процесса заключения договора.
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
