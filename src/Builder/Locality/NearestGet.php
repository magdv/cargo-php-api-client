<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Locality;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Locality\Responses\LocalityResponse;

class NearestGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Поиск ближайших локалити в радиусе 50 км от заданных координат
     *
     * @return LocalityResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): LocalityResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            LocalityResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Координаты широты
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qLatitude(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['latitude']);
        } else {
            $c->query['latitude'] = $value;
        }

        return $c;
    }

    /**
     * Координаты долготы
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qLongitude(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['longitude']);
        } else {
            $c->query['longitude'] = $value;
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
     * Номер текущей выбираемой страницы
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
