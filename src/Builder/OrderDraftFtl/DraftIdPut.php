<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftFtl;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderDraftFtlRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderDraftFtlResponse;

class DraftIdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Редактирование черновика заказа FTL
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(OrderDraftFtlRequest $body): OrderDraftFtlResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            OrderDraftFtlResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
