<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\CarrierContactRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderCardResponse;

class CarrierContactPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправить список кураторов перевозчика для добавления.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(CarrierContactRequest $body): OrderCardResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            OrderCardResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
