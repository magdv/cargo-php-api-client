<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyResponse;

final class HashGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод возвращает реквизиты организации по хэшу.
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

    /**
     * Список ключей для детализации связанных сущностей. Доступно: partner
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qWith(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['with']);
        } else {
            $c->query['with'] = $value;
        }

        return $c;
    }
}
