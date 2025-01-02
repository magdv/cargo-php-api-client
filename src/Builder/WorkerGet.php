<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Worker\Responses\WorkerListResponse;

class WorkerGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Вывод списка сотрудников компании.
     *
     * @return WorkerListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): WorkerListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            WorkerListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Поиск по полям фамилия, имя, отчество и должность, email, контактный телефон, должность
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterSearchText(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[searchText]']);
        } else {
            $c->query['filter[searchText]'] = $value;
        }

        return $c;
    }

    /**
     * Все или заблокированные или активные
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterBlockedStatus(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[blockedStatus]']);
        } else {
            $c->query['filter[blockedStatus]'] = $value;
        }

        return $c;
    }

    /**
     * Присвоенная роль для работы с простой подписью
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterSimpleSignatureRole(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[simpleSignatureRole]']);
        } else {
            $c->query['filter[simpleSignatureRole]'] = $value;
        }

        return $c;
    }

    /**
     * Просматриваемая страница, по умолчанию 1
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
     * Количество элементов на одну страницу, по умолчанию 20
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
     * Список ключей для сортировки. Доступно: lastName, firstName, secondName, email, contactPhone, position, roleId. Сортировка производитсяя по возрастанию. При наличии префикса "-" сортировка будет произведена в обратном порядке.
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
     * Отсортировать сотрудников по идентификатору(на первое место)
     *
     * @var null|int[] $value
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
}
