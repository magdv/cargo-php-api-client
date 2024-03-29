<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\ExistsResponse;

class ExistsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод для существования хоть одной записи по запросу.
     *
     * @return ExistsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ExistsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ExistsResponse::class,
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
     * Массив id статусов заказов.
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
     * Заказы дочерней компании
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterBranchId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[branchId]']);
        } else {
            $c->query['filter[branchId]'] = $value;
        }

        return $c;
    }

    /**
     * Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг)
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterConsignorParent(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[consignorParent]']);
        } else {
            $c->query['filter[consignorParent]'] = $value;
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
     * Фильтр по наличию перевозчика.
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterHasCarrier(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[hasCarrier]']);
        } else {
            $c->query['filter[hasCarrier]'] = $value;
        }

        return $c;
    }

    /**
     * Наличие отказа для заказа по его типу
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterExpeditorOrderRefuseType(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[expeditorOrderRefuseType]']);
        } else {
            $c->query['filter[expeditorOrderRefuseType]'] = $value;
        }

        return $c;
    }

    /**
     * Статус проверки пакетов документов (сканов)
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterDocumentPackageStatus(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[documentPackageStatus]']);
        } else {
            $c->query['filter[documentPackageStatus]'] = $value;
        }

        return $c;
    }

    /**
     * Выборка по статусу оплат перевозчику
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterCarrierPaidStatus(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[carrierPaidStatus]']);
        } else {
            $c->query['filter[carrierPaidStatus]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтр подписей.
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterSignStatus(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[signStatus]']);
        } else {
            $c->query['filter[signStatus]'] = $value;
        }

        return $c;
    }

    /**
     * Идентификатор куратора со стороны заказчика.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterConsignorCurator(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[consignorCurator]']);
        } else {
            $c->query['filter[consignorCurator]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтр наличия предложений (в том числе ставок перевозчика).
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterHasExpeditorOffers(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[hasExpeditorOffers]']);
        } else {
            $c->query['filter[hasExpeditorOffers]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтр по типу согласования цены.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterExpeditorPriceType(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[expeditorPriceType]']);
        } else {
            $c->query['filter[expeditorPriceType]'] = $value;
        }

        return $c;
    }
}
