<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Correction\CorrectionId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderCorrectionHistoryResponse;

class HistoryGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение разницы параметров заказа и заявки на изменение заказа.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): OrderCorrectionHistoryResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderCorrectionHistoryResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
