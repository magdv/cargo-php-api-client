<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\Excel;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;

class OfferReportGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * выгрузка xlsx с отчетом по запросам цен.
     *
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): EmptyDataResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Дата от.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFrom(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['from']);
        } else {
            $c->query['from'] = $value;
        }

        return $c;
    }

    /**
     * Дата до.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qTo(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['to']);
        } else {
            $c->query['to'] = $value;
        }

        return $c;
    }
}
