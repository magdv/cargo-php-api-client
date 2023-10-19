<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyRequirementResponse;

class RequirementGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Требования отправителя к перевозкам.
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
