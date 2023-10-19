<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyBranchResponse;

class BranchGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка дочерних компаний.
     *
     * @return CompanyBranchResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyBranchResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyBranchResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Фильтр по наличию активного договора с ГП.
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterHasActiveGpContract(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[hasActiveGpContract]']);
        } else {
            $c->query['filter[hasActiveGpContract]'] = $value;
        }

        return $c;
    }

    /**
     * Является ли компания головной
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsMain(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isMain]']);
        } else {
            $c->query['filter[isMain]'] = $value;
        }

        return $c;
    }
}
