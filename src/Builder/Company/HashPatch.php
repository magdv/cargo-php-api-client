<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\CompanyPatchRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyInfoResponse;

final class HashPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод редактирует данные компании.
     *
     * @return CompanyInfoResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(CompanyPatchRequest $body): CompanyInfoResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            CompanyInfoResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
