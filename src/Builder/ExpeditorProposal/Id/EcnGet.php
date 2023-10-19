<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderEcnListResponse;

class EcnGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка ЭТрН у заказа
     *
     * @return OrderEcnListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderEcnListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderEcnListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
