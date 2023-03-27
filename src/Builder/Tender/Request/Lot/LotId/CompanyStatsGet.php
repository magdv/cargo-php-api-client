<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/tender/request/lot/{lotId}/company-stats
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request\Lot\LotId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tender\Responses\TenderCompanyStatListResponse;

final class CompanyStatsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить список компаний со статистикой по лоту
     *
     * @return TenderCompanyStatListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): TenderCompanyStatListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            TenderCompanyStatListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Компания просматривала тендер/лоты тендера
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsView(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isView]']);
        } else {
            $c->query['filter[isView]'] = $value;
        }

        return $c;
    }

    /**
     * Компания получала оповещения по тендеру
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsNotify(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isNotify]']);
        } else {
            $c->query['filter[isNotify]'] = $value;
        }

        return $c;
    }

    /**
     * Компания делала предложение по тендеру
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsOffer(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isOffer]']);
        } else {
            $c->query['filter[isOffer]'] = $value;
        }

        return $c;
    }

    /**
     * Номер страницы для постраничной навигации
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
     * Количество элементов на страницу
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
