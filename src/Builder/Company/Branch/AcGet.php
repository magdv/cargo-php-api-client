<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/branch/ac
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Branch;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyBranchListAcResponse;

final class AcGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Поиск дочерних компаний для автокомплита
     *
     * @return CompanyBranchListAcResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyBranchListAcResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyBranchListAcResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Поисковая строка
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterSearch(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[search]']);
        } else {
            $c->query['filter[search]'] = $value;
        }

        return $c;
    }

    /**
     * carrier, consignor
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterType(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[type]']);
        } else {
            $c->query['filter[type]'] = $value;
        }

        return $c;
    }

    /**
     * Отсортировать компании по id (На первое место)
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qSelectedIds(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['selectedIds']);
        } else {
            $c->query['selectedIds'] = $value;
        }

        return $c;
    }

    /**
     * Страница выдачи.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPage(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['page']);
        } else {
            $c->query['page'] = $value;
        }

        return $c;
    }

    /**
     * лимит выдачи.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPerPage(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['perPage']);
        } else {
            $c->query['perPage'] = $value;
        }

        return $c;
    }
}
