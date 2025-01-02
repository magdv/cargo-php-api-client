<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Uuid;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Responses\DigitalActNonDeliveryCarResponse;

class DigitalActNonDeliveryCarGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить данные электронного акта о неподаче машины на погрузку
     *
     * @return DigitalActNonDeliveryCarResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): DigitalActNonDeliveryCarResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            DigitalActNonDeliveryCarResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
