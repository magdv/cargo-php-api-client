<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Edm;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Edm\Responses\EdmBoxListResponse;

class DiadocBoxListGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение ящиков контрагента для отправки документов через Диадок
     *
     * @return EdmBoxListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): EdmBoxListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            EdmBoxListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * ИНН
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qInn(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['inn']);
        } else {
            $c->query['inn'] = $value;
        }

        return $c;
    }
}
