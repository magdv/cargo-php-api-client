<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorEcn\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Requests\ExpeditorEcnSignRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderEcnResponse;

class SignPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подписать ЭТрН
     *
     * @return OrderEcnResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ExpeditorEcnSignRequest $body): OrderEcnResponse
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
