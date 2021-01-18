<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request\Lot;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestLotItemResponse;

class LotIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение лота по тендеру в статусе запроса цены
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): TenderRequestLotItemResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            TenderRequestLotItemResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
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
}
