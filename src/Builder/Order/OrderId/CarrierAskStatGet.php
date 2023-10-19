<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\CarrierAskInfoResponse;

class CarrierAskStatGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение информации отправителем информации о текущей минимальной ставке и общей статистики по ставкам
     *
     * @return CarrierAskInfoResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CarrierAskInfoResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CarrierAskInfoResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
