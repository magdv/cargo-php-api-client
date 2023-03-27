<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-contract-conclusion/issue-certificate-phone
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractConclusion;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Requests\ExpeditorContractConclusionIssueCertificatePhoneRequest;
use Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Responses\ExpeditorContractConclusionResponse;

final class IssueCertificatePhonePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправка телефона для получения роли ПЭП-админ на подтверждение.
     *
     * @return ExpeditorContractConclusionResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ExpeditorContractConclusionIssueCertificatePhoneRequest $body): ExpeditorContractConclusionResponse
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
