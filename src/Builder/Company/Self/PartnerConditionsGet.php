<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/self/partner-conditions
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\PartnerConditionsResponse;

final class PartnerConditionsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение условий партнёрства.
     *
     * @return PartnerConditionsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PartnerConditionsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PartnerConditionsResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
