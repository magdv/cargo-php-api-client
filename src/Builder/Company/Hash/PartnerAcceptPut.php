<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/partner-accept
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\PartnerContractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\PartnerStatusResponse;

final class PartnerAcceptPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод принимет запрос от компании на партнёрство
     *
     * @return PartnerStatusResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(PartnerContractRequest $body): PartnerStatusResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            PartnerStatusResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
