<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Responses\PreOrderGroupListResponse;

class PreOrderGroupGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение данных для управления группами предзаказов.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): PreOrderGroupListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PreOrderGroupListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Дата начала периода выборки.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterStartDate(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[startDate]']);
        } else {
            $c->query['filter[startDate]'] = $value;
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
