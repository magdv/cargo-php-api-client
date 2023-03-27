<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company-confirmation/company
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Requests\CompanyUpdateRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\StatusResponse;

final class CompanyPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Доработка данных компании (СНО, флаг декларации).
     *
     * @return StatusResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(CompanyUpdateRequest $body): StatusResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            StatusResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
