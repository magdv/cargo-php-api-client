<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\Ac;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\AcDriverNameResponse;

class DriverNameGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Поиск водителей по имени, с которыми ранее работал клиент
     *
     * @return AcDriverNameResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): AcDriverNameResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            AcDriverNameResponse::class,
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
     * Страница выдачи
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
     * Количество объектов на странице
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
