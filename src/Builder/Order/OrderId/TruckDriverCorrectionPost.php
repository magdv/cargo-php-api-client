<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderTruckDriverCorrectionRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderTruckDriverCorrectionResponse;

class TruckDriverCorrectionPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание запроса на смену водителя или машины.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(OrderTruckDriverCorrectionRequest $body): OrderTruckDriverCorrectionResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderTruckDriverCorrectionResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
