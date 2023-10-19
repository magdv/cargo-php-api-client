<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderListResponse;

class OrderGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['filter[orderType]' => ['auction', 'auctionNoPrice'], 'page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод для получения списка заказов согласно фильтру.
     *
     * @return OrderListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderListResponse::class,
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
     * Тип показываемого заказа.
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
     * Тип заказа.
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterOrderType(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[orderType]']);
        } else {
            $c->query['filter[orderType]'] = $value;
        }

        return $c;
    }

    /**
     * Вкладка списка по принадлежности заказа.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterBelong(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[belong]']);
        } else {
            $c->query['filter[belong]'] = $value;
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
     * Радиус точки отправления.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterDepartureRadius(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[departureRadius]']);
        } else {
            $c->query['filter[departureRadius]'] = $value;
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
     * Радиус точки назначения.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterDestinationRadius(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[destinationRadius]']);
        } else {
            $c->query['filter[destinationRadius]'] = $value;
        }

        return $c;
    }

    /**
     * Массив тэгов, только для отправителя.
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterTag(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[tag]']);
        } else {
            $c->query['filter[tag]'] = $value;
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
     * Дата погрузки ДО.
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
     * Дата начала розыгрыша ОТ.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterStartFrom(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[startFrom]']);
        } else {
            $c->query['filter[startFrom]'] = $value;
        }

        return $c;
    }

    /**
     * Дата начала розыгрыша ДО.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterStartTo(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[startTo]']);
        } else {
            $c->query['filter[startTo]'] = $value;
        }

        return $c;
    }

    /**
     * Идентификатор сотрудника создателя для отправителя и сотрудника закрепителя для перевозчика.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterWorker(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[worker]']);
        } else {
            $c->query['filter[worker]'] = $value;
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
     * Вес груза в ОТ, кг.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterWeightFrom(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[weightFrom]']);
        } else {
            $c->query['filter[weightFrom]'] = $value;
        }

        return $c;
    }

    /**
     * Вес груза в ДО, кг.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterWeightTo(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[weightTo]']);
        } else {
            $c->query['filter[weightTo]'] = $value;
        }

        return $c;
    }

    /**
     * Объём груза в ОТ, м3.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterCapacityFrom(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[capacityFrom]']);
        } else {
            $c->query['filter[capacityFrom]'] = $value;
        }

        return $c;
    }

    /**
     * Объём груза в ДО, м3.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterCapacityTo(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[capacityTo]']);
        } else {
            $c->query['filter[capacityTo]'] = $value;
        }

        return $c;
    }

    /**
     * Текущая цена заказа ОТ.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterPriceFrom(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[priceFrom]']);
        } else {
            $c->query['filter[priceFrom]'] = $value;
        }

        return $c;
    }

    /**
     * Текущая цена заказа ДО.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterPriceTo(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[priceTo]']);
        } else {
            $c->query['filter[priceTo]'] = $value;
        }

        return $c;
    }

    /**
     * Массив id статусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации.
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
     * Хэш код компании победителя
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
     * Идентификатор куратора со стороны заказчика
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
     * Массив id хэшей заказов
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterOrder(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[order]']);
        } else {
            $c->query['filter[order]'] = $value;
        }

        return $c;
    }

    /**
     * Дата создания заказа ОТ
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterCreateFrom(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[createFrom]']);
        } else {
            $c->query['filter[createFrom]'] = $value;
        }

        return $c;
    }

    /**
     * Дата создания заказа ДО
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterCreateTo(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[createTo]']);
        } else {
            $c->query['filter[createTo]'] = $value;
        }

        return $c;
    }

    /**
     * Только доступные мне заказы. Только для перевозчика.
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterAvailable(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[available]']);
        } else {
            $c->query['filter[available]'] = $value;
        }

        return $c;
    }

    /**
     * Тип заказа.
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterKind(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[kind]']);
        } else {
            $c->query['filter[kind]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтр по статусу генерального партнера.
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsGeneralPartner(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isGeneralPartner]']);
        } else {
            $c->query['filter[isGeneralPartner]'] = $value;
        }

        return $c;
    }

    /**
     * Только заказы в которых прикреплен водитель/машина
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsTruck(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isTruck]']);
        } else {
            $c->query['filter[isTruck]'] = $value;
        }

        return $c;
    }

    /**
     * Только заказы в которых перевозчик прикрепил документы
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsCarrierDocument(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isCarrierDocument]']);
        } else {
            $c->query['filter[isCarrierDocument]'] = $value;
        }

        return $c;
    }

    /**
     * Только заказы в которых ГП прикрепил документы
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsGeneralPartnerDocument(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isGeneralPartnerDocument]']);
        } else {
            $c->query['filter[isGeneralPartnerDocument]'] = $value;
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
     * Статус проверки оригиналов документов
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterDocumentOriginalsStatus(?array $value): self
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
     * Статус последнего патча заказа
     *
     * @var null|int[] $value
     *
     * @return self
     */
    public function qFilterPatchStatus(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[patchStatus]']);
        } else {
            $c->query['filter[patchStatus]'] = $value;
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
     * Выборка по статусу назначения водителей
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterDriverStatus(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[driverStatus]']);
        } else {
            $c->query['filter[driverStatus]'] = $value;
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
     * Массив доп данных.
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
