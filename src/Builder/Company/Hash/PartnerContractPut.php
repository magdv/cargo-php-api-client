<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/partner-contract
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\PartnerContractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyInfoResponse;

final class PartnerContractPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод для редактирования данных о договоре партнёров.
     *
     * @return CompanyInfoResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(PartnerContractRequest $body): CompanyInfoResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            CompanyInfoResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
