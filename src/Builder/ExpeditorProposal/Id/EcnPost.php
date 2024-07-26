<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\OrderEcn\Objects\EcnAdditionalData;
use Cargomart\ApiClient\Entity\Order\OrderEcn\Responses\OrderEcnResponse;

class EcnPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание ЭТрН для заказа.
     *
     * @return OrderEcnResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(EcnAdditionalData $body): OrderEcnResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderEcnResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
