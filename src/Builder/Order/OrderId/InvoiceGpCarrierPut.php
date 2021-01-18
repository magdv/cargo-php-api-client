<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderInvoiceRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderInvoiceResponse;

class InvoiceGpCarrierPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Добавление данных о платежах генерального партнера для перевозчика
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(OrderInvoiceRequest $body): OrderInvoiceResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            OrderInvoiceResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
