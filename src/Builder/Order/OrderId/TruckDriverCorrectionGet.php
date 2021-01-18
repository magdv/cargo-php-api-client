<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderTruckDriverCorrectionResponse;

class TruckDriverCorrectionGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение данных о запросе на смену водителя или машины
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): OrderTruckDriverCorrectionResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderTruckDriverCorrectionResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
