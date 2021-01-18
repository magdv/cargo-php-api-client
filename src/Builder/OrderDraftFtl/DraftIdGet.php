<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftFtl;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderDraftFtlResponse;

class DraftIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение иформации о черновике FTL заказа.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): OrderDraftFtlResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderDraftFtlResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
