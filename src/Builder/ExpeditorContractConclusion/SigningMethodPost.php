<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-contract-conclusion/signing-method
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractConclusion;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Requests\ExpeditorContractConclusionSigningMethodRequest;
use Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Responses\ExpeditorContractConclusionResponse;

final class SigningMethodPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Выбор способа подписания.
     *
     * @return ExpeditorContractConclusionResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ExpeditorContractConclusionSigningMethodRequest $body): ExpeditorContractConclusionResponse
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
