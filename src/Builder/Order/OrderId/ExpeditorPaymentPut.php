<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\ExpeditorPaymentRequest;
use Cargomart\ApiClient\Entity\Order\Responses\ExpeditorPaymentResponse;

class ExpeditorPaymentPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание или обновление информации о платеже.
     *
     * @return ExpeditorPaymentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ExpeditorPaymentRequest $body): ExpeditorPaymentResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            ExpeditorPaymentResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
