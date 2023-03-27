<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-draft-ftl/{draftId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftFtl;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderDraftFtlRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderDraftFtlResponse;

final class DraftIdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Редактирование черновика заказа FTL
     *
     * @return OrderDraftFtlResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
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
