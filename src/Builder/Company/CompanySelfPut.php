<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/self
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\CompanyPutRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyInfoResponse;

final class CompanySelfPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод сохраняет реквизиты своей организации.
     *
     * @return CompanyInfoResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(CompanyPutRequest $body): CompanyInfoResponse
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
