<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyListResponse;

class CompanyGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод возвращает все компании с учетом фильтров
     *
     * @return CompanyListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Фильтр по типу компании (carrier, consignor) При with=partner перевозчикам автоматически применяется type = consignor, а отправителям type = carrier.
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
     * Фильтр по статусам взаимодействия с компаниями (not - нет отношений, sent - отправлено предложение, offered - получено предложение, accepted - партнёры)
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterPartnerStatus(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[partnerStatus]']);
        } else {
            $c->query['filter[partnerStatus]'] = $value;
        }

        return $c;
    }

    /**
     * Поиск по краткому названию компании
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterShortName(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[shortName]']);
        } else {
            $c->query['filter[shortName]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтр по виду деятельности (идентификатор вида деятельности)
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterActivityType(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[activityType]']);
        } else {
            $c->query['filter[activityType]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтр по типу договора о партнёрстве (идентификатор)
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterContractTypeId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[contractTypeId]']);
        } else {
            $c->query['filter[contractTypeId]'] = $value;
        }

        return $c;
    }

    /**
     * Показывать заблокированных клиентов (1 - да. По умолчанию - не показывать)
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterShowBlocked(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[showBlocked]']);
        } else {
            $c->query['filter[showBlocked]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтр по ключевым клиентам системы
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsMajor(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isMajor]']);
        } else {
            $c->query['filter[isMajor]'] = $value;
        }

        return $c;
    }

    /**
     * Хэш компании, чьих партнёров надо получить
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterMajorCompanyId(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[majorCompanyId]']);
        } else {
            $c->query['filter[majorCompanyId]'] = $value;
        }

        return $c;
    }

    /**
     * true - компании из чёрного списка. false - компании нет в черном списке. значение не передано - ограничение не накладывается.
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterDisabled(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[disabled]']);
        } else {
            $c->query['filter[disabled]'] = $value;
        }

        return $c;
    }

    /**
     * Откуда (город, максимум область)
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterFrom(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[from]']);
        } else {
            $c->query['filter[from]'] = $value;
        }

        return $c;
    }

    /**
     * Куда (город, максимум область)
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterTo(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[to]']);
        } else {
            $c->query['filter[to]'] = $value;
        }

        return $c;
    }

    /**
     * Тип автопарка. собственный / не важно (булево значение, если важно. Если ничего не указано - ищем по всем машинам)
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsCarOwner(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isCarOwner]']);
        } else {
            $c->query['filter[isCarOwner]'] = $value;
        }

        return $c;
    }

    /**
     * Идентификаторы типов кузовов
     *
     * @var null|int[] $value
     *
     * @return self
     */
    public function qFilterTruckTypeId(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[truckTypeId]']);
        } else {
            $c->query['filter[truckTypeId]'] = $value;
        }

        return $c;
    }

    /**
     * Список ключей для раскрытия связей. Доступно: partner - ключевые партнёры (только для грузоперевозчиков). metrics - получение метрик компании. carInfo - получение информации о количестве машин в автопарке.
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
     * Список ключей для сортировки. Доступно: orderCount, companyName. По умолчанию сортировка производитсяя по убыванию. При наличии префикса "+" сортировка будет произведена по возрастанию, "-" по убыванию.
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
