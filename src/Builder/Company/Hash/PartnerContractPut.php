<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\PartnerContractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyInfoResponse;

class PartnerContractPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод для редактирования данных о договоре партнёров.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
