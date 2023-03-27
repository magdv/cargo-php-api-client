<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/tender/request/{tenderId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestItemResponse;

final class TenderIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение тендера в статусе запроса цены
     *
     * @return TenderRequestItemResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): TenderRequestItemResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            TenderRequestItemResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Фильтр для подключения связанных сущностей
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
