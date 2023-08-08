<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Search\Responses\SearchResponse;

class SearchGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод для поиска информации в Каргомарте.
     *
     * @return SearchResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): SearchResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            SearchResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Поисковая строка
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterSearch(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[search]']);
        } else {
            $c->query['filter[search]'] = $value;
        }

        return $c;
    }

    /**
     * Найти указанные ID
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterSelectedIds(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[selectedIds]']);
        } else {
            $c->query['filter[selectedIds]'] = $value;
        }

        return $c;
    }
}
