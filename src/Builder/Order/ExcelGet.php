<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/excel
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\FileLinkResponse;

final class ExcelGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['filter[orderType]' => ['auction', 'auctionNoPrice']];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение ссылки на excel файл отчета.
     *
     * @return FileLinkResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): FileLinkResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            FileLinkResponse::class,
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
     * Массив id cтатусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации.
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
}
