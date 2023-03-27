<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/partner-reject
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\PartnerShortFormRequest;
use Cargomart\ApiClient\Entity\Company\Responses\PartnerStatusResponse;

final class PartnerRejectPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод отказывает компании в запросе на партнёрство
     *
     * @return PartnerStatusResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(PartnerShortFormRequest $body): PartnerStatusResponse
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
