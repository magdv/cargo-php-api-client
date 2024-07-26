<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\OrderPayment\Responses\OrderPaymentResponse;

class PaymentGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Список оплат по счёту
     *
     * @return OrderPaymentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderPaymentResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderPaymentResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
