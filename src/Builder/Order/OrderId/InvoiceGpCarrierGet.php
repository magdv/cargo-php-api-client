<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/invoice-gp-carrier
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderInvoiceResponse;

final class InvoiceGpCarrierGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение данных о платежах генерального партнера для перевозчика
     *
     * @return OrderInvoiceResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderInvoiceResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderInvoiceResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
