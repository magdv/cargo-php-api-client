<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Objects\Requirement;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyRequirementResponse;

class RequirementPatch extends AbstractRequest
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
    public function do(Requirement $body): CompanyRequirementResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            CompanyRequirementResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
