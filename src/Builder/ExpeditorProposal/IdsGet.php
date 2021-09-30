<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalListIdsResponse;

class IdsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод для получения списка ids заказов Экспедитора согласно фильтру.
     *
     * @return ProposalListIdsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ProposalListIdsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ProposalListIdsResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Идентификатор события для получения заказов которые измененились после этого события
     *
     * @var null|int $value
     *
     * @return self
     */
    public function xModifyFromEventHeader(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->headers['X-Modify-From-Event']);
        } else {
            $c->headers['X-Modify-From-Event'] = $value;
        }

        return $c;
    }

    /**
     * Порядковый номер заказа.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterSerial(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[serial]']);
        } else {
            $c->query['filter[serial]'] = $value;
        }

        return $c;
    }

    /**
     * Код кладр пункта отправления.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterDeparture(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[departure]']);
        } else {
            $c->query['filter[departure]'] = $value;
        }

        return $c;
    }

    /**
     * Код кладр пункта назначения.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterDestination(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[destination]']);
        } else {
            $c->query['filter[destination]'] = $value;
        }

        return $c;
    }

    /**
     * Список идентификаторов типов ТС.
     *
     * @var null|int[] $value
     *
     * @return self
     */
    public function qFilterTruckType(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[truckType]']);
        } else {
            $c->query['filter[truckType]'] = $value;
        }

        return $c;
    }

    /**
     * Массив id cтатусов заказов.
     *
     * @var null|int[] $value
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
     * Список статусов доверенности.
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterProxyStatus(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[proxyStatus]']);
        } else {
            $c->query['filter[proxyStatus]'] = $value;
        }

        return $c;
    }

    /**
     * Дата погрузки ОТ.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterLoadingFrom(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[loadingFrom]']);
        } else {
            $c->query['filter[loadingFrom]'] = $value;
        }

        return $c;
    }

    /**
     * Дата погрузки ДО
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterLoadingTo(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[loadingTo]']);
        } else {
            $c->query['filter[loadingTo]'] = $value;
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
     * Хэш код компании отправителя
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
     * Статус архивации заказа
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterArchiveStatus(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[archiveStatus]']);
        } else {
            $c->query['filter[archiveStatus]'] = $value;
        }

        return $c;
    }

    /**
     * Идентификатор водителя
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterDriver(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[driver]']);
        } else {
            $c->query['filter[driver]'] = $value;
        }

        return $c;
    }

    /**
     * ФИО водителя
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterDriverName(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[driverName]']);
        } else {
            $c->query['filter[driverName]'] = $value;
        }

        return $c;
    }

    /**
     * Предел времени закрытия заказа
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterMaxEndTime(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[maxEndTime]']);
        } else {
            $c->query['filter[maxEndTime]'] = $value;
        }

        return $c;
    }

    /**
     * Трек номер
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterTrackingNumber(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[trackingNumber]']);
        } else {
            $c->query['filter[trackingNumber]'] = $value;
        }

        return $c;
    }

    /**
     * Статус оригинала документа
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterDocumentOriginalsStatus(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[documentOriginalsStatus]']);
        } else {
            $c->query['filter[documentOriginalsStatus]'] = $value;
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
