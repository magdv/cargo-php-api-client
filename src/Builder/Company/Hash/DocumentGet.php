<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/document
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyDocumentList;

final class DocumentGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод возвращает список документов, загруженный компанией.
     *
     * @return CompanyDocumentList
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyDocumentList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyDocumentList::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Поиск по наименованию документа.
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
     * Точная фильтрация по типам документов.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterTypeId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[typeId]']);
        } else {
            $c->query['filter[typeId]'] = $value;
        }

        return $c;
    }

    /**
     * Сортировка списка документов пользователя. Поддерживается сортировка по полям title, createDate, documentType. При наличии префикса "-" сортировка будет произведена в обратном порядке.
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
     * Пагинация списка документов.
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
     * Количество элементов на странице.
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
     * Список ключей для детализации связанных сущностей. Доступно: documentType
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
}
