<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ProductionCalendar\Responses\ProductionCalendarResponse;

class ProductionCalendarGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод для получения праздничных дней по производственному календарю.
     *
     * @return ProductionCalendarResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ProductionCalendarResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ProductionCalendarResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Начало периода.
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
     * Конец периода.
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
}
