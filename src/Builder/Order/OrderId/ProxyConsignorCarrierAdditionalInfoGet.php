<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderAdditionalInfoResponse;

class ProxyConsignorCarrierAdditionalInfoGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить добавочные данные, или проверить их наличие.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): OrderAdditionalInfoResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderAdditionalInfoResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
