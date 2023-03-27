<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/self/requirement
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyRequirementResponse;

final class RequirementGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Мои требования к перевозкам.
     *
     * @return CompanyRequirementResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyRequirementResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyRequirementResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
