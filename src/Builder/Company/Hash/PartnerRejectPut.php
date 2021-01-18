<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\PartnerShortFormRequest;
use Cargomart\ApiClient\Entity\Company\Responses\PartnerStatusResponse;

class PartnerRejectPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод отказывает компании в запросе на партнёрство
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
