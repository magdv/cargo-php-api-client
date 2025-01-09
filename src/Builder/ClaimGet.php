<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;

class ClaimGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['perPage' => 20, 'page' => 1];

    /** @var string[] */
    public $headers = [];

    /**
     * Список требований на оплату
     *
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): EmptyDataResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Номер требования
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterClaimNumber(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[claimNumber]']);
        } else {
            $c->query['filter[claimNumber]'] = $value;
        }

        return $c;
    }

    /**
     * Номер заявки
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterSerialId(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[serialId]']);
        } else {
            $c->query['filter[serialId]'] = $value;
        }

        return $c;
    }

    /**
     * Статус требования
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterStatus(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[status]']);
        } else {
            $c->query['filter[status]'] = $value;
        }

        return $c;
    }

    /**
     * Заявитель требования
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterClaimant(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[claimant]']);
        } else {
            $c->query['filter[claimant]'] = $value;
        }

        return $c;
    }

    /**
     * Хэш код компании перевозчика
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterCarrier(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[carrier]']);
        } else {
            $c->query['filter[carrier]'] = $value;
        }

        return $c;
    }

    /**
     * Хэш код компании заказчика
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterConsignor(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[consignor]']);
        } else {
            $c->query['filter[consignor]'] = $value;
        }

        return $c;
    }

    /**
     * Тип требования
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
     * Сортировка списка требований. Поддерживается сортировка по полю date. При наличии префикса "-" сортировка будет произведена в обратном порядке.
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qSort(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['sort']);
        } else {
            $c->query['sort'] = $value;
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

    /**
     * Номер страницы
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
}
