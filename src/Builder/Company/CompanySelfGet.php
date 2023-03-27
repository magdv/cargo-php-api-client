<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/self
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyResponse;

final class CompanySelfGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод возвращает реквизиты моей организации.
     *
     * @return CompanyResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
