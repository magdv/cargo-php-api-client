<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyBranchHighlightedResponse;

class CompanyBranchHighlightedGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод возвращает список рекламируемых филиалов компаний.
     *
     * @return CompanyBranchHighlightedResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyBranchHighlightedResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyBranchHighlightedResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
