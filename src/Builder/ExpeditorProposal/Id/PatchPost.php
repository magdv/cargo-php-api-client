<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\OrderPatch\Requests\OrderPatchRequest;
use Cargomart\ApiClient\Entity\Order\OrderPatch\Responses\OrderPatchResponse;

class PatchPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание запроса на изменение заказа экспедитором.
     *
     * @return OrderPatchResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderPatchRequest $body): OrderPatchResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderPatchResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
