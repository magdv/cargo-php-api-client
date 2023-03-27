<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-contract-conclusion/issue-certificate
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractConclusion;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Requests\ExpeditorContractConclusionIssueCertificateRequest;
use Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Responses\ExpeditorContractConclusionResponse;

final class IssueCertificatePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Добавление данных для выдачи ПЭП.
     *
     * @return ExpeditorContractConclusionResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ExpeditorContractConclusionIssueCertificateRequest $body): ExpeditorContractConclusionResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            ExpeditorContractConclusionResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
