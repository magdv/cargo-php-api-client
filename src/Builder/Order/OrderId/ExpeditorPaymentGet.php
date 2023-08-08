<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\ExpeditorPaymentResponse;

class ExpeditorPaymentGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получения списка оплат
     *
     * @return ExpeditorPaymentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ExpeditorPaymentResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ExpeditorPaymentResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
