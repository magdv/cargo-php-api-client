<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/self/logo
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyResponse;

final class LogoDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод удаляет логотип моей организации.
     *
     * @return CompanyResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            CompanyResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
